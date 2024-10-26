<?php
use function Livewire\Volt\{state, mount};

state(['id', 'title', 'slug', 'description', 'body']);

mount(function () {
    $id = request('id');

    if (!$id) {
        return;
    }

    $blog = Blog::find($id);

    $this->id = $blog->id;
});

$save = function () {
    $this->validate([
        'title' => ['required'],
        'slug' => ['required', 'alpha_dash', 'unique:blogs,slugs,' . $this->id],
        'description' => ['nullable', 'max:255'],
        'body' => ['required'],
    ]);

    $blog = new Blog();

    $blog->title = $this->title;

    $blog->slug = $this->slug;

    $blog->description = $this->description;

    $blog->body = $this->body;

    $blog->save();
};
?>

<x-admin-layout>
    @volt('save-blog')
        <div>

            <form action="" wire:submit='save'>
                <x-jui::section>

                    <div class="max-w-lg">
                        <x-jui::input label="Title" :error="$errors->first('title')" />

                        <x-jui::input label="Slug" :error="$errors->first('slug')" />

                        <x-jui::textarea label="Description" :error="$errors->first('description')" />

                        <x-jui::editor label="Body" :error="$errors->first('body')" />

                        <x-jui::field>
                            <x-jui::button wireTarget="save">Save</x-jui::button>
                        </x-jui::field>
                    </div>
                </x-jui::section>
            </form>

        </div>
    @endvolt
</x-admin-layout>
