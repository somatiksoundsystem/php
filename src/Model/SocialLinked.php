<?php
declare(strict_types=1);


namespace App;


use Illuminate\Database\Eloquent\Relations\MorphMany;

trait SocialLinked
{

    public function socialLinks(): MorphMany
    {
        return $this->morphMany(SocialLink::class, 'linked');
    }

}
