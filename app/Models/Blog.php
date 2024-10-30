<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JoydeepBhowmik\LaravelMediaLibary\Traits\HasMedia;

class Blog extends Model
{
    use HasFactory, HasMedia;

    protected $appends = ['thumbnail_url'];

    protected static function boot()
    {
        parent::boot();
        self::bootHasMedia();
    }

    function getThumbnailUrlAttribute()
    {
        return $this->getFirstMediaUrl('thumbnail') ?? 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAASFBMVEXMzMx1dXVvb2/S0tKKioq5ubnIyMh5eXm8vLzPz89wcHCAgIDFxcWampqxsbF8fHyUlJScnJyrq6uzs7OGhoajo6OPj49paWnfc0UJAAAC+UlEQVR4nO3d63KqMBRAYRPksiOCRe15/zc9RbwAJso+hfEMWd/fGmZcAykESjcbAAAAAAAAAAAAAAAAAAAAAACAX5FkIfLpbzY7yfY7u4jdPltZLjk6Zxbi3HFdtYrFUl0Un/5+c5LtorHcdk27Vpkv2cqYvPz0N5xRuuxRaFz66W84H0lt+5WWOFhk227Zpus5Dm+xkvk3naw2FnvWBMRSIJYCsRSIpfCrWPJyFLF6IzdlWhWb8EBiPTS5tca6fRkaSqzbsLK+XiY5UwXGEusqq3tXf4E1K2JdRw3XdfxrVsTqBh0HrdzBO5pY3aDTaBnGu2ZFrIvxgqFrfMOJdfG0bP9FrKBxLEessHK0YznvqRaxukGjCd4ywb8Y1AxPHbb+TxGrUw/2rILzrFey3smD/8QhwlihFSspc3dvFbgzFFss+TqHxpUH45yz+Sn46EdksWRv3XfoqSEpq6apyvDqX1yxZP9zqLk8vLonL9eVo4qVHK7TUvVvt6tjinVvZaz3aub9puOJlRzs4wx9q3vcsftwPLHk0D9Jd7X/vDOwzebymFE0sS5z+0DobOp5i9n3n8s6cyyxnltNnrgk3TkbU6zhMXg7FE8vbqjeJe01dkyxEl+rSROXyLbdXESxku/QY6buzRmXFN0VYzyxwq3eTVz3Za5oYnnnqykT189vwduZWSyxXrdqLxUDE5ek5j4ykljvWrXf3n934tz/SBSxJrRqJ67nrWQn2/9EDLEmtWpvUIwuFZNqeIs6iliF9aTx1aoHBeQ8GkesYY7HTQrJduP9kVijHrfHjJLK80NiDblTu9wsm/EhSCxvrfooUp58vxKI5dFU/r/sJJYCsYhFLA1iKRBLgVgKxFIglgKxFIilQCwFYikQS4FYCsRSIJYCsRSGsUw+CxNDrE02k27TK48176aJpdg0sRSbXm0sXpA4AXuWBi91VeB1wQq8iFqjWLKVcat6xTkvz1fh3zKo8A8/AAAAAAAAAAAAAAAAAAAAAADA/+ovZCI2Rv2EFLUAAAAASUVORK5CYII=';
    }
}
