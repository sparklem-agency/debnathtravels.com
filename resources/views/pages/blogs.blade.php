<?php
use App\Models\Blog;
use function Laravel\Folio\{name};

name('blogs');

?>
@php
    $blogs = Blog::paginate();

@endphp
<x-app-layout title="Blogs">
    <x-page-heading>
        Blogs
    </x-page-heading>
    <div class="p-5 py-10">
        @if ($blogs && count($blogs))
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5">
                @foreach ($blogs as $blog)
                    <x-mary-card :title="$blog->title">
                        <x-slot:subtitle>{{ $blog->created_at->format('d M, Y') }}</x-slot:subtitle>

                        <div class="hidden lg:block">
                            {{ $blog->description }}
                        </div>

                        <x-slot:figure>
                            <div class="w-full border bg-black">
                                <img class="mx-auto aspect-video" src="{{ $blog->thumbnail_url }}" />
                            </div>
                        </x-slot:figure>
                        <div class="mt-5">
                            <x-mary-button label="ReadMore" :link="route('view-blog', $blog->slug)" />
                        </div>
                    </x-mary-card>
                @endforeach
            </div>

        @endif

        @if (!count($blogs))
            <center>No Blog posted yet</center>
        @endif

        {{ $blogs ? $blogs->links() : '' }}
    </div>
</x-app-layout>
