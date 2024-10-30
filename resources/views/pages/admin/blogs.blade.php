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
            <x-mary-header title='Blogs' />

            @if ($blogs && count($blogs))
                <div class="grid grid-cols-2 gap-5">
                    @foreach ($blogs as $blog)
                        <x-mary-card :title="$blog->title">
                            <x-slot:subtitle>{{ $blog->created_at->format('d M, Y') }}</x-slot:subtitle>

                            {{ $blog->description }}

                            <x-slot:figure>
                                <div class="w-full border bg-black">
                                    <img class="mx-auto aspect-video" src="{{ $blog->thumbnail_url }}" />
                                </div>
                            </x-slot:figure>
                            <x-slot:actions>
                                <x-mary-button label="Edit" :link="route('admin.blogs.edit', $blog->id)" icon="o-pencil-square" tooltip="Edit" />
                            </x-slot:actions>
                        </x-mary-card>
                    @endforeach
                </div>

                @if (!count($blogs))
                    <center>No posts found</center>
                @endif
            @endif

            {{ $blogs ? $blogs->links() : '' }}
        </div>
    @endvolt
</x-admin-layout>
