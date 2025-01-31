<x-app-layout title="Home">

    <div class="relative h-72 lg:h-[600px] bg-black bg-cover bg-center pb-10 pt-20"
        style="background-image: url('{{ asset('/assets/hero-bg.png') }}')" x-data=" {
             colors: [`orange`, `yellow`, `blue`],
             currentColor: `red`,
             startChanging() {
                 setInterval(() => {
        
                     this.currentColorIndex =
                         Math.floor(Math.random() * this.colors.length);
                     this.currentColor = this.colors[this.currentColorIndex];
                 }, 3000);
             }
         }"
        x-init="startChanging()">

        <div class="grid grid-cols-1 p-5 text-white h-full place-items-center">
            <div class="mx-auto max-w-xl">
                <h2 class="text-center text-xl font-bold capitalize leading-snug text-white">
                    Explore <br>
                    the <span>northeast</span> India

                    with Us !
                </h2>

                <div class="mt-5 grid grid-cols-3 gap-2 text-[10px]">
                    <x-hero-icon>
                        <x-slot:svg>
                            <svg class="size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M10.007 2.10377C8.60544 1.65006 7.08181 2.28116 6.41156 3.59306L5.60578 5.17023C5.51004 5.35763 5.35763 5.51004 5.17023 5.60578L3.59306 6.41156C2.28116 7.08181 1.65006 8.60544 2.10377 10.007L2.64923 11.692C2.71404 11.8922 2.71404 12.1078 2.64923 12.308L2.10377 13.993C1.65006 15.3946 2.28116 16.9182 3.59306 17.5885L5.17023 18.3942C5.35763 18.49 5.51004 18.6424 5.60578 18.8298L6.41156 20.407C7.08181 21.7189 8.60544 22.35 10.007 21.8963L11.692 21.3508C11.8922 21.286 12.1078 21.286 12.308 21.3508L13.993 21.8963C15.3946 22.35 16.9182 21.7189 17.5885 20.407L18.3942 18.8298C18.49 18.6424 18.6424 18.49 18.8298 18.3942L20.407 17.5885C21.7189 16.9182 22.35 15.3946 21.8963 13.993L21.3508 12.308C21.286 12.1078 21.286 11.8922 21.3508 11.692L21.8963 10.007C22.35 8.60544 21.7189 7.08181 20.407 6.41156L18.8298 5.60578C18.6424 5.51004 18.49 5.35763 18.3942 5.17023L17.5885 3.59306C16.9182 2.28116 15.3946 1.65006 13.993 2.10377L12.308 2.64923C12.1078 2.71403 11.8922 2.71404 11.692 2.64923L10.007 2.10377ZM6.75977 11.7573L8.17399 10.343L11.0024 13.1715L16.6593 7.51465L18.0735 8.92886L11.0024 15.9999L6.75977 11.7573Z">
                                </path>
                            </svg>
                        </x-slot:svg>

                        <x-slot:text>
                            <b class="font-medium">Google</b>
                            <p>Verified</p>
                        </x-slot:text>
                    </x-hero-icon>

                    <x-hero-icon>
                        <x-slot:svg>
                            <svg class="size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z">
                                </path>
                            </svg>
                        </x-slot:svg>

                        <x-slot:text>
                            <b class="font-medium">MSME</b>
                            <p>Certified</p>
                        </x-slot:text>
                    </x-hero-icon>

                    <x-hero-icon>
                        <x-slot:svg>
                            <svg class="size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z">
                                </path>
                            </svg>
                        </x-slot:svg>

                        <x-slot:text>
                            <b class="font-medium">18 Years of</b>
                            <p>Experience</p>
                        </x-slot:text>
                    </x-hero-icon>

                </div>

            </div>

        </div>

    </div>

    <div
        class="relative z-20 mx-auto -mt-5 flex w-fit items-center gap-3 rounded-md bg-[var(--primary)] p-2 text-xs text-white">
        <a class="block" href="{{ url('/') }}">Car rental</a>
        |
        <a class="block whitespace-nowrap">Tour Package</a>

    </div>
    <div class="-mt-5">
        <x-banner-slider pagination="true" />
    </div>
    <div class="p-5">
        <x-contact-form />
    </div>

    <div class="mt-10">
        <img src="{{ url('assets/banners/carrental.jpg') }}?{{ env('APP_VERSION') }}" class="w-full" alt="">
    </div>
    <div class="mt-10 p-5">

        <x-car-collection />
    </div>

    <div class="mt-10">
        <img src="{{ url('assets/banners/packages.jpg') }}?{{ env('APP_VERSION') }}" class="w-full" alt="">
    </div>
    <div class="mt-10 p-3">

        <x-packages />
    </div>
    <div class="mt-10 p-3">
        <x-accommodation />
    </div>

    <div class="mt-10 p-3">
        <x-why-choose-us />
    </div>

    <div class="mt-10 p-3">
        <x-reviews-2 />
    </div>

    <div class="mt-10 p-3">
        <x-our-journey />
    </div>

    <div class="mt-10 p-3">
        <x-places />
    </div>

</x-app-layout>
