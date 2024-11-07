<?php

namespace App\Livewire\DataTables;

use App\Models\Place;
use JoydeepBhowmik\LivewireDatatable\Datatable;

class PlaceTable extends Datatable
{
    public $model = Place::class;

    function table(): array
    {
        return [
            $this->field('image')->value(function ($row) {
                $imageUrl = $row->getFirstMediaUrl('photo');
                return <<<HTML
                    <img class="size-10" src="{$imageUrl}"/>
HTML;
            }),
            $this->field('name'),
            $this->field('Actions')->value(function ($row) {
                $editUrl = route('admin.places.edit', $row->id);

                return <<<HTML
                    <a href="{$editUrl}" class="btn btn-sm btn-primary">Edit</a>
                    
HTML;
            })
        ];
    }
}
