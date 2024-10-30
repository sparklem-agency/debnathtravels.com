<?php

use JoydeepBhowmik\LaravelMediaLibary\Providers\LaravelMediaServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FolioServiceProvider::class,
    App\Providers\VoltServiceProvider::class,
    LaravelMediaServiceProvider::class,
    JoydeepBhowmik\LivewireDatatable\Providers\DataTableServiceProvider::class,
];
