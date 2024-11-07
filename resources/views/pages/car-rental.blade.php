<?php
use function Laravel\Folio\{name};
use App\Models\Car;

name('car-rental');

?>
@php
    $cars = Car::all();
@endphp

<x-app-layout title="Car rental">
    <x-page-heading>
        Car rental
    </x-page-heading>
    <div class="p-5 py-10">
        <x-heading>
            <x-slot name="title">
                Affordable Car Rentals for Stress-Free Travel
            </x-slot>
            Discover a wide selection of rental cars to suit your style and budget – drive with confidence.
        </x-heading>

        <br>

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3">
            @foreach ($cars as $car)
                <x-car-card :$car />
            @endforeach
        </div>

        <div class="mt-10 grid grid-cols-2 gap-5">
            <div class="rounded-md bg-slate-200 p-3">
                <strong class="text-green-500">Included</strong>
                <br>
                <li class="mt-5">Car fuel</li>
                <li> Toll free</li>
                <li> Driver</li>
                <li>Fooding & lodging (for driver)</li>
                <li> Road tax</li>
            </div>
            <div class="rounded-md bg-slate-200 p-3">
                <strong class="text-red-500">Excluded</strong>
                <br>
                <li class="mt-5">Extra charge</li>
                <li>All tourist points entry fees.</li>
                <li>For GST bill have to pay extra 12%</li>
            </div>
        </div>

        <div class="mt-10">
            <x-why-choose-us />
        </div>
    </div>
</x-app-layout>
