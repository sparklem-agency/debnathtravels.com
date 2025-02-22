<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JoydeepBhowmik\LaravelMediaLibary\Traits\HasMedia;

class Review extends Model
{
    use HasFactory, HasMedia;

    protected static function boot()
    {
        parent::boot();
        self::bootHasMedia();
    }
}
