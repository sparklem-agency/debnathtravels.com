<?php

namespace App\Livewire\DataTables;

use App\Models\Blog;
use JoydeepBhowmik\LivewireDatatable\Datatable;

class BlogTable extends Datatable
{
    public $model = Blog::class;

    function table(): array
    {
        return [
            $this->field('title'),
            $this->field('description'),
            $this->field('Actions')->value(function ($row) {
                $editUrl = route('blogs.edit', $row->id);
                $deleteUrl = route('blogs.delete', $row->id);
                return <<<HTML
                    <a href="{$editUrl}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{$deleteUrl}" class="btn btn-sm btn-danger">Delete</a>
HTML;
            })
        ];
    }
}
