<?php

namespace App\Livewire\DataTables;

use App\Models\Car;
use JoydeepBhowmik\LivewireDatatable\Datatable;

class CarTable extends Datatable
{
    public $model = Car::class;


    function delete(string $id)
    {

        $car = Car::find($id);

        $car && $car->delete();
    }

    function table(): array
    {
        return [
            $this->field('name'),
            $this->field('type'),
            $this->field('seats'),
            $this->field('price'),
            $this->field('fuel'),
            $this->field('order'),
            $this->field('actions')->value(function ($row) {
                $editUrl = route('admin.cars.edit', $row->id);

                return <<<HTML
                    <a href="{$editUrl}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" wire:confirm="Are you sure ?" wire:click="delete(`{$row->id}`)" class="btn btn-sm btn-danger" wire:loading.class="opacity-55" wire:target="delete(`{$row->id}`)">Delete</button>
HTML;
            })
        ];
    }
}
