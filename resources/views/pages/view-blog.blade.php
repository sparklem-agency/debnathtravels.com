<?php

use App\Models\Blog;
use Livewire\Volt\Component;

new class extends Component {
    function with()
    {
        $slug = request('slug');

        $Blog = Blog::where('slug', $slug)->first();

        if (!$Blog) {
            abort(404);
        }

        return compact('Blog');
    }
};

?>

<x-app-layout>
    @volt('view-Blog')
        <div>
            <x-slot:title> Blogs / {{ $Blog->title }}</x-slot:title>
            <x-page-heading style="background-image: url({{ $Blog->getFirstMediaUrl('thumbnail') }})">
                {{ $Blog->title }}
            </x-page-heading>
            <div class="bg-gray-100 p-5 py-10">

                <div class="prose mx-auto">

                    <div>
                        <img class="w-full rounded-md shadow-2xl" src="{{ $Blog->getFirstMediaUrl('thumbnail') }}"
                            srcset="" alt="">
                    </div>


                    @php
                        $Parsedown = new Parsedown();
                    @endphp
                    <div class="text-xs">
                        {!! $Parsedown->text($Blog->description) !!}
                    </div>


                    <div class="prose prose-xl mt-5">
                        {!! $Parsedown->text($Blog->body) !!}
                    </div>
                </div>

            </div>


            <div></div>
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
                <x-contact-form />
            </div>

            <div class="mt-10">

            </div>
            <div class="mt-10">
                <x-why-choose-us />
            </div>

            <div class="grid grid-cols-1 items-center gap-2 space-y-5 p-5 lg:grid-cols-2">
                <div>
                    <strong class="font-base">Certificates </strong>
                    <img class="h-14" src="{{ asset('/assets/certified.png') }}" alt="">
                </div>
                <div>
                    <strong class="font-base"s>We accept (more) </strong>
                    <img class="h-14" src="{{ asset('/assets/we-accept.png') }}" srcset="" alt="">
                </div>
            </div>
        </div>
    @endvolt
</x-app-layout>
