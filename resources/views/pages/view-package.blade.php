<?php

use App\Models\Package;
use Livewire\Volt\Component;

new class extends Component {
    function with()
    {
        $slug = request('slug');

        $package = Package::where('slug', $slug)->first();

        if (!$package) {
            abort(404);
        }

        return compact('package');
    }
};

?>

<x-app-layout>
    @volt('view-package')
        <div>
            <x-slot:title> packages / {{ $package->title }}</x-slot:title>
            <x-page-heading style="background-image: url({{ $package->getFirstMediaUrl('thumbnail') }})">
                {{ $package->title }}
            </x-page-heading>
            <div class="bg-gray-100 p-5 py-10">

                <div class="prose mx-auto">

                    <div>
                        <img class="w-full rounded-md shadow-2xl" src="{{ $package->getFirstMediaUrl('thumbnail') }}"
                            srcset="" alt="">
                    </div>

                    @php
                        $Parsedown = new Parsedown();
                    @endphp
                    {!! $Parsedown->text($package->description) !!}

                </div>

            </div>

            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-5 p-3">
                <div class="rounded-md bg-slate-200 p-3">
                    <strong class="text-green-500">Included</strong>
                    <br>
                    <li class="mt-5">Car fuel</li>
                    <li>Toll free</li>
                    <li>Driver, driver’s fooding and lodging</li>
                    <li>Inner line permit</li>
                    {{-- <li>Bum La pass Scorpio/Bolero</li> --}}
                    <li>Road tax</li>
                    {{-- <li>Lodging (Home stay for 2 persons per day ₹2000)</li> --}}
                </div>
                <div class="rounded-md bg-slate-200 p-3">
                    <strong class="text-red-500">Excluded</strong>
                    <br>
                    <li class="mt-5">Extra charge</li>
                    <li>River rafting</li>
                    <li>All entry point fees</li>
                    <li>For GST bill, have to pay extra 12%</li>
                    <li>Fooding</li>
                    <li>Personal expenses such as laundry, telephone calls, tips, liquor, joy rides, heater charges, etc.
                    </li>
                </div>
            </div>

            <div class="mx-auto mt-10 max-w-xs">
                <x-cta />
            </div>

            <div class="mt-10 p-5">
                <x-contact-form :text="'**package**:' . $package->name" />
            </div>

            <div class="mt-10">

            </div>
            <div class="mt-10">
                <x-why-choose-us />
            </div>

        </div>
    @endvolt
</x-app-layout>
