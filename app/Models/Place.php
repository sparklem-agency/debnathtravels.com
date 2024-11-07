<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JoydeepBhowmik\LaravelMediaLibary\Traits\HasMedia;

class Place extends Model
{
    use HasFactory, HasMedia;

    protected static function boot()
    {
        parent::boot();
        self::bootHasMedia();
    }
}
