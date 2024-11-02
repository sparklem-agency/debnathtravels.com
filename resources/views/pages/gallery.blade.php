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
                $photos = App\Models\User::find(1)?->getMedia('gallery')->unique();

            @endphp

            <div>
                <div class="md:columns-2 lg:columns-3">
                    @foreach ($photos as $photo)
                        <img class="mt-5 w-full first:mt-0" src="{{ $photo->getUrl() }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
