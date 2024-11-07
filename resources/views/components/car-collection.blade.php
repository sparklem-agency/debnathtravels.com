<?php

use App\Models\Car;
$cars = Car::all();
?>
<div {{ $attributes }}>
    <div class="bg-ptrn-2 rounded-3xl bg-white py-10" data-aos="fade-up">
        <x-heading title="Car rental">
            The Best Car Collection
        </x-heading>

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3">
            @foreach ($cars as $car)
                <x-car-card :$car />
            @endforeach
        </div>

        <center>
            <a class="primary-button mt-10" href="{{ route('gallery') }}">
                View details

                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                    </path>
                </svg>
            </a>
        </center>
    </div>

</div>
