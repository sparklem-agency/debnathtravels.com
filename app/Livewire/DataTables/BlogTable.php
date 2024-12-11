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
                $editUrl = route('admin.blogs.edit', $row->id);
                return <<<HTML
                    <a href="{$editUrl}" class="btn btn-sm btn-primary">Edit</a>
HTML;
            })
        ];
    }
}
