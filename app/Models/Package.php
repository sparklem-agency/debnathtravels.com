<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use JoydeepBhowmik\LaravelMediaLibary\Traits\HasMedia;

class Package extends Model
{
    use HasFactory, HasMedia;

    protected $casts = [
        'tags' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
        self::bootHasMedia();
    }
}
