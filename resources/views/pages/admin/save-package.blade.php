<?php

use Mary\Traits\Toast;
use App\Models\Package;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use JoydeepBhowmik\LaravelMediaLibary\Models\Media;

new class extends Component {
    use WithFileUploads, Toast;

    public string|null $id = null;

    public string $title = '';

    public string $slug = '';

    public string $description = '';

    public string $price = '';

    public $tags = [];

    public $photos;

    public $thumbnail;

    function mount()
    {
        $id = request('id');

        if (!$id) {
            return;
        }

        $package = Package::find($id);

        if (!$package) {
            abort(404);
        }

        $this->id = $package->id;

        $this->title = $package->title;

        $this->slug = $package->slug;

        $this->description = $package->description;

        $this->price = $package->price;

        $this->tags = $package->tags;
    }

    function save()
    {
        $package = $this->id ? Package::find($this->id) : new Package();

        $this->validate([
            'title' => ['required'],
            'price' => ['required'],
            'slug' => ['required', 'alpha_dash', 'unique:packages,slug,' . $this->id],
            'description' => ['required'],
            'thumbnail' => [$package?->getFirstMediaUrl('thumbnail') ? 'nullable' : 'required', 'image'],
        ]);

        $package->title = $this->title;

        $package->slug = $this->slug;

        $package->price = $this->price;

        $package->description = $this->description;

        $package->tags = $this->tags;

        if ($package->save()) {
            if ($this->thumbnail) {
                $package->deleteMediaCollection('thumbnail');
                $package->addMedia($this->thumbnail)->toCollection('thumbnail');

                $this->reset('thumbnail');
            }

            if ($this->photos) {
                foreach ($this->photos as $photo) {
                    $package->addMedia($photo)->toCollection('photos');
                }

                $this->reset('photos');
            }

            $this->success('Saved');

            $this->redirect(route('admin.packages.edit', $package->id), navigate: true);
        }
    }
    function delete_photo(string $id)
    {
        $media = Media::find($id);

        $media && $media->delete();
    }

    function with()
    {
        $package = Package::find($this->id);

        return compact('package');
    }
};
?>

<x-admin-layout>
    @volt('save-package')
        <div>

            <x-slot:title>{{ $package ? 'Edit package' : 'Create package' }}</x-slot:title>

            <x-mary-form wire:submit='save'>

                <x-mary-header :title="$package ? 'Edit package' : 'Create package'" separator />

                <x-mary-file wire:model="thumbnail" label="Thumbnail" accept="image/png, image/jpeg">
                    <img class="h-40 rounded-lg"
                        src="{{ $package?->getFirstMediaUrl('thumbnail') ?? url('/thumbnail-placeholder.jpg') }}" />

                </x-mary-file>

                <x-mary-input wire:model='title' label='Title' />

                <x-mary-input wire:model='slug' label='Slug' :prefix="url('packages/')" />

                <x-mary-input wire:model='price' label='Price' />

                <x-mary-markdown disk='public' wire:model="description" label="Description" />

                <x-mary-tags label="Tags" wire:model="tags" hint="Hit enter to create a new tag" />

                <x-mary-file wire:model='photos' multiple label="Photos" />

                <div>
                    @php

                        $photos = $package?->getMedia('photos');

                    @endphp
                    @if ($photos && count($photos))
                        @foreach ($photos as $photo)
                            <div class="relative">
                                <button type="button" wire:click='delete_photo("{{ $photo->id }}")'>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                        </path>
                                    </svg>
                                </button>
                                <img src="{{ $photo->getUrl() }}" alt="">
                            </div>
                        @endforeach
                    @endif
                </div>

                <x-slot:actions>
                    <x-mary-button type="submit">Save</x-mary-button>
                </x-slot:actions>

            </x-mary-form>
        </div>
    @endvolt
</x-admin-layout>
