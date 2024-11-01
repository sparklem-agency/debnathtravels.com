<?php
use function Laravel\Folio\{name};

name('gallery');

?>

<x-app-layout title="Gallery">
    <x-page-heading>
        Gallery
    </x-page-heading>
    <div class="p-5 py-10">
        <x-heading>
            <x-slot name="title">
                Our Journey In Pictures
            </x-slot>
            Explore the best of Northeast India with our expertly curated tour packages. Let us guide you to
            breathtaking landscapes, rich cultures, and unforgettable experiences in this enchanting region.
        </x-heading>

        <br>

        <div>
            @php
                $photos = App\Models\User::find(1)?->getMedia('photos');
            @endphp

            <div>
                @foreach ($photos as $photo)
                    <div class="md:columns-2 lg:columns-3">
                        <img class="mt-5 md:mt-0" src="{{ $photo->getUrl() }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
