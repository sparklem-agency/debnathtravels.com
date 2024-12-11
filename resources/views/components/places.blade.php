<?php

use App\Models\Place;
$places = Place::orderby('ordering')->get();
?>
<div class="bg-ptrn-2 rounded-2xl bg-blue-100 p-3 py-16">
    <x-heading title="Places">
        Visit Wonderful places at lowest prices
    </x-heading>

    <div class="mt-10">

        <swiper-container class="hidden lg:block" pagination="true" pagination-clickable="true" space-between="30"
            slides-per-view="4">
            @foreach ($places as $place)
                <swiper-slide>
                    <div class="group relative aspect-square overflow-hidden rounded-3xl bg-black bg-cover bg-no-repeat ring-2"
                        data-aos="flip-right">
                        <img class="transition-all duration-300 ease-in-out group-hover:scale-150"
                            src="{{ $place->getFirstMediaUrl('photo') }}" alt="">
                        <div
                            class="absolute -bottom-40 mx-auto w-full px-3 transition-all duration-300 ease-in-out group-hover:-bottom-1">
                            <div class="rounded-t-3xl bg-black p-1 text-center text-white ring-2">
                                {{ $place->name }}

                                <div class="h-2"></div>

                            </div>

                        </div>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>

        <swiper-container class="block lg:hidden" pagination="true" pagination-clickable="true" space-between="30"
            slides-per-view="2">
            @foreach ($places as $place)
                <swiper-slide>
                    <div class="group relative aspect-square overflow-hidden rounded-3xl bg-black bg-cover bg-no-repeat ring-2"
                        data-aos="flip-right">
                        <img class="h-full object-cover transition-all duration-300 ease-in-out group-hover:scale-150"
                            src="{{ $place->getFirstMediaUrl('photo') }}" alt="">
                        <div
                            class="absolute -bottom-40 mx-auto w-full px-3 transition-all duration-300 ease-in-out group-hover:-bottom-1">
                            <div class="rounded-t-3xl bg-black p-1 text-center text-white ring-2">
                                {{ $place->name }}

                                <div class="h-2"></div>

                            </div>

                        </div>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
</div>
