<?php

namespace App\Livewire\DataTables;

use App\Models\Place;
use JoydeepBhowmik\LivewireDatatable\Datatable;

class PlaceTable extends Datatable
{
    public $model = Place::class;

    public function delete(string $id)
    {
        $package = Place::find($id);
        if ($package) {
            $package->delete();
        }
    }

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
                    <button type="button" wire:confirm="Are you sure?" wire:click="delete('{$row->id}')" class="btn btn-sm btn-danger" wire:loading.class="opacity-55" wire:target="delete('{$row->id}')">Delete</button>
HTML;
            })
        ];
    }
}
