<?php
use App\Models\Blog;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use function Livewire\Volt\{state, mount, usesFileUploads, with};

new class extends Component{

    use WithFileUploads;
    
    public $id; public $title; public $slug;
    public $description;  
public $thumbnail;
    public $body;
}

usesFileUploads();

state([]);

mount(function () {
    $id = request('id');

    if (!$id) {
        return;
    }

    $this->id = $id;
});

$save = function () {
    $this->validate([
        'title' => ['required'],
        'slug' => ['required', 'alpha_dash', 'unique:blogs,slug,' . $this->id],
        'description' => ['nullable', 'max:255'],
        'body' => ['required'],
    ]);

    $blog = new Blog();

    $blog->title = $this->title;

    $blog->slug = $this->slug;

    $blog->description = $this->description;

    $blog->body = $this->body;

    if ($blog->save()) {
        if ($this->thumbnail) {
            $blog->deleteMediaCollection('thumbnail');
            $blog->addMedia($this->thumbnail)->toCollection('thumbnail');
        }

        session()->flash('mary.toast.title', 'Post Created');
    }
};

with(function () {
    $blog = Blog::find($this->id);

    if ($this->id && $blog) {
        return abort(404);
    }

    return compact('blog');
});
?>

<x-admin-layout>

    @volt('save-blog')
        <x-mary-form wire:submit="save">

            <x-mary-header title="Create blog" separator />

            <x-mary-file wire:model="thumbnail" label="Thumbnail" accept="image/png, image/jpeg">
                <img class="h-40 rounded-lg"
                    src="{{ $blog?->getFirstMediaUrl('thumbnail') ?? url('/thumbnail-placeholder.jpg') }}" />

            </x-mary-file>

            <x-mary-input label="Title" wire:model="title" />
            <x-mary-input label="Slug" wire:model="slug" :prefix="$_SERVER['HTTP_HOST'] . '/blogs/'" />
            <x-mary-textarea label="Description" wire:model="description" />
            <x-mary-markdown disk='public' wire:model="body" label="Body" />

            <x-slot:actions>

                <x-mary-button class="btn-primary" type="submit" label="Save" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    @endvolt
</x-admin-layout>
