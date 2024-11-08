<?php

?>

<div {{ $attributes->merge([
    'data-aos' => 'fade-up',
]) }}>

    @php
        $photos = App\Models\User::find(1)?->getMedia('gallery')?->unique()?->shuffle()->take(4);

    @endphp
    <div class="bg-ptrn-2 rounded-2xl bg-[#D7EBFF] p-5 py-16">
        <x-heading class="mt-8" title="Gallery">
            Our journey in pictures
        </x-heading>
        <div class="mt-10 columns-2 gap-4 lg:columns-4">

            @foreach ($photos as $photo)
                <img class="break-inside-avoid-column rounded-2xl even:mt-8" src="{{ $photo->getUrl() }}" alt="">
            @endforeach
        </div>

        <center>
            <a class="primary-button mt-10" href="{{ route('gallery') }}">
                View all

                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                    </path>
                </svg>
            </a>
        </center>

    </div>

</div>
