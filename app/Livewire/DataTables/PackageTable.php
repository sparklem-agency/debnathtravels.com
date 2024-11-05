<?php

namespace App\Livewire\DataTables;

use App\Models\Package; // Make sure you import the Package model
use JoydeepBhowmik\LivewireDatatable\Datatable;

class PackageTable extends Datatable
{
    public $model = Package::class;

    public function delete(string $id)
    {
        $package = Package::find($id);
        if ($package) {
            $package->delete();
        }
    }

    public function table(): array
    {
        return [
            $this->field('title'),
            $this->field('price'),
            $this->field('slug'),
            $this->field('actions')->value(function ($row) {
                $editUrl = route('admin.packages.edit', $row->id);

                return <<<HTML
                    <a href="{$editUrl}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" wire:confirm="Are you sure?" wire:click="delete('{$row->id}')" class="btn btn-sm btn-danger" wire:loading.class="opacity-55" wire:target="delete('{$row->id}')">Delete</button>
HTML;
            }),
        ];
    }
}
