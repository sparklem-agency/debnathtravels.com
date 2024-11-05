<?php

use App\Models\Blog;
use Livewire\Volt\Component;

new class extends Component {
    public $id;

    public function mount()
    {
        $this->id = request('id');
    }

    public function with(): array
    {
        $blogs = Blog::paginate();

        return compact('blogs');
    }
};

?>

<x-admin-layout title="Blogs">

    @volt('admin.blogs')
        <div>
            <x-mary-header title='Blogs'>

                <x-slot:actions>
                    <x-mary-button class="btn-primary" icon="o-plus" :link="route('admin.blogs.create')" />
                </x-slot:actions>
            </x-mary-header>

            <livewire:datatables.blog-table />
        </div>
    @endvolt
</x-admin-layout>
