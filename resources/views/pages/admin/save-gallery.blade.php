<?php

use App\Models\User;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use JoydeepBhowmik\LaravelMediaLibary\Models\Media;

new class extends Component {
    use WithFileUploads;

    public $photos = [];

    function save()
    {
        $this->validate([
            'photos.*' => ['required', 'image'],
        ]);

        $user = User::find(1);

        foreach ($this->photos as $photo) {
            $user->addMedia($photo)->toCollection('gallery');
        }

        $this->reset('photos');
    }

    function delete_photo(string $id)
    {
        $media = Media::find($id);

        $media && $media->delete();
    }

    function with()
    {
        $user = User::find(1);

        return compact('user');
    }
};

?>

<x-admin-layout title="gallery">
    @volt('gallery')
        <div>
            <x-mary-header title="Gallery" separator />

            <x-mary-form wire:submit='save'>
                <x-mary-file wire:model='photos' label="Photos" multiple />

                <x-slot:actions>
                    <x-mary-button type="submit">Save</x-mary-button>
                </x-slot:actions>
            </x-mary-form>
            @php
                $photos = $user->getMedia('gallery');

            @endphp
            <div>
                @foreach ($photos as $photo)
                    <div class="relative" wire:key='{{ $photo->id }}'>
                        <button type="button" wire:click='delete_photo("{{ $photo->id }}")'>
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                </path>
                            </svg>
                        </button>
                        <img src="{{ $photo->getUrl() }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    @endvolt
</x-admin-layout>
