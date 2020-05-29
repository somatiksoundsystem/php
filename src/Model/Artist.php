<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

/**
 * @method static create(array $array)
 * @method static find()
 */
class Artist extends Model
{
    use SocialLinked;

    private const UPLOADS_IMG_ARTISTS = '/uploads/img/artists';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'password',
        'photo_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['photo'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return Artist
     */
    public static function store(array $data): Artist
    {
        return Artist::create($data);
    }

    /**
     * @param bool $new
     * @return \string[][]
     */
    public static function getRules(bool $new = true): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:255', $new ? 'unique:App\Artist' : ''],
            'email' => ['required', 'string', 'email', 'max:255', $new ? 'unique:App\Artist' : ''],
            'info' => ['nullable', 'string'],
            'photo' => ['nullable', 'image', 'mimes:jpeg', 'dimensions:ratio=3/4', 'max:2048'],
        ];
    }

    public static function resolve(string $nameOrId): Artist
    {
        return Artist::query()
            ->where('id', $nameOrId)
            ->orWhere('name', $nameOrId)
            ->orWhere('nickname', $nameOrId)
            ->firstOrFail();
    }

    /**
     * Get the user's photo.
     *
     * @return string
     */
    public function getPhotoAttribute()
    {
        return self::UPLOADS_IMG_ARTISTS . '/' . $this->photo_url;
    }

    public function setPhotoAttribute($image)
    {
        $fileName = Str::lower($this->nickname) . '.' . $image->getClientOriginalExtension();
        // Store image
        $image->storeAs(self::UPLOADS_IMG_ARTISTS, $fileName, 'public');
        $this->photo_url = $fileName;
    }

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class);
    }

}
