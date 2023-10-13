<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /** @return HasMany<Vote> */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    // protected function likes(): Attribute
    // {
    //     // return new Attribute(get: function () {
    //     //     return $this->votes()->sum('like');
    //     // });

    //     return new Attribute(
    //         get: fn () => $this->votes()->sum('like')
    //     );

    // }

    // protected function unlikes(): Attribute
    // {
    //     // return new Attribute(get: function () {
    //     //     return $this->votes()->sum('unlike');
    //     // });
    //     return new Attribute(
    //         get: fn () => $this->votes()->sum('unlike')
    //     );
    // }
}
