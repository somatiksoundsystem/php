<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;


/**
 * @method static Album create(array $array)
 */
class Album extends Model
{
    use SocialLinked;

    const DATE_FORMAT = 'Y-m-d';
    const UPLOADS_IMG_ALBUMS = '/uploads/img/albums';

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = self::DATE_FORMAT;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['authors'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'released_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'released_at' => 'date:' . self::DATE_FORMAT,
    ];

    protected $guarded = [
        'authors',
        'image_url'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image'];


    public static function store(array $data): Album
    {
        $album = Album::create($data);
        $album->authors()->sync($data['authors']);
        return $album;

    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

    /**
     * @param $new
     * @return \string[][]
     */
    public static function getRules(bool $new = true): array
    {
        return [
            'name' => ['required', 'string', 'max:255', $new ? 'unique:App\Album' : ''],
            'player_url' => ['nullable', 'url'],
            'released_at' => ['required', 'date_format:' . self::DATE_FORMAT],
            'authors' => ['required', 'array'],
            'authors.*' => ['required', 'integer', 'exists:artists,id'],
            'image' => [$new ? 'required' : 'nullable', 'image', 'mimes:jpeg', 'dimensions:ratio=1', 'max:2048'],
            'social_links.*' => ['nullable', 'url'],
        ];
    }

    public static function resolve(string $nameOrId):Album
    {
        return Album::query()
            ->where('id', $nameOrId)
            ->orWhere('name', $nameOrId)
            ->firstOrFail();
    }

    /**
     * Get the album's cover.
     *
     * @return string
     */
    public function getImageAttribute()
    {
        return self::UPLOADS_IMG_ALBUMS . '/' . $this->image_url;
    }

    public function setImageAttribute($image)
    {
        $fileName = Str::slug($this->name, '_', 'ru') . '.' . $image->getClientOriginalExtension();
        // Store image
        $image->storeAs(self::UPLOADS_IMG_ALBUMS, $fileName, 'public');
        $this->image_url = $fileName;
    }

    public function update(array $attributes = [], array $options = []): bool
    {
        $updated = parent::update($attributes, $options);
        if ($updated) {
            $this->authors()->sync($attributes['authors']);
        }
        return $updated;
    }

}
