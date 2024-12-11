<?php

use App\Models\Package;

$packages = Package::all();

?>

<nav {{ $attributes->merge(['class' => 'relative p-3 grid grid-cols-2 lg:grid-cols-3 z-50']) }} x-data="{
    showMenu: false
}">
    <div>
        <x-logo />
    </div>
    <div class="hidden items-center justify-center gap-3 text-[13px] text-white lg:flex capitalize">

        <a href="{{ route('home') }}" @class([
            'p-3 whitespace-nowrap',
            'active' => request()->routeIs('home'),
        ])>Home</a>
        <a href="{{ route('about') }}" @class([
            'p-3 whitespace-nowrap',
            'active' => request()->routeIs('about'),
        ])>About Us</a>
        <a href="{{ route('car-rental') }}" @class([
            'p-3 whitespace-nowrap',
            'active' => request()->routeIs('car-rental'),
        ])>car rental</a>
        <a href="{{ route('blogs') }}" @class([
            'p-3 whitespace-nowrap',
            'active' => request()->routeIs('blogs'),
        ])>Blogs</a>
        <a href="{{ route('gallery') }}" @class([
            'p-3 whitespace-nowrap',
            'active' => request()->routeIs('gallery'),
        ])>Gallery</a>
        <div class="relative" x-data="{ show: false }" @click.away="show=false">

            <a href="#" @class([
                'p-3 flex items-center gap-2',
                'active' => request()->routeIs('packages'),
            ]) @click="show=!show">Packages

                <svg class="size-4 transition-all duration-300 ease-in-out" :class="show ? 'rotate-180' : 'rotate-0'"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z">
                    </path>
                </svg>
            </a>

            <div class="absolute top-full overflow-hidden rounded-md border bg-white shadow-sm" style="display: none"
                x-show="show" x-transition>
                @foreach ($packages as $package)
                    <a class="block whitespace-nowrap p-3 text-black hover:bg-slate-100"
                        href="{{ route('view-package', $package->slug) }}">{{ $package->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- mobile menu --}}
    <div class="fixed bottom-0 right-0 top-0 z-50 w-full capitalize max-w-xs bg-white text-black" style="display: none"
        x-transition x-show="showMenu">

        <button class="fixed right-4 top-4" type="button" @click="showMenu=false">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>
        <div class="flex flex-col gap-3 p-5">
            <a href="{{ route('home') }}" @class(['p-3', 'active' => request()->routeIs('home')])>Home</a>
            <a href="{{ route('about') }}" @class(['p-3', 'active' => request()->routeIs('about')])>About Us</a>
            <a href="{{ route('blogs') }}" @class(['p-3', 'active' => request()->routeIs('blogs')])>Blogs</a>
            <a href="{{ route('car-rental') }}" @class(['p-3', 'active' => request()->routeIs('car-rental')])>Car rental</a>

            <div class="relative" x-data="{ show: false }">

                <a href="#" @class([
                    'p-3 flex items-center gap-2 w-full',
                    'active' => request()->routeIs('packages'),
                ]) @click="show=!show">Packages

                    <svg class="size-4 ml-auto transition-all duration-300 ease-in-out"
                        :class="show ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z">
                        </path>
                    </svg>
                </a>

                <div class="ml-5 space-y-2" style="display: none" x-show="show" x-transition>
                    @foreach ($packages as $package)
                        <a class="block p-3 text-black hover:bg-slate-100"
                            href="{{ route('view-package', $package->slug) }}">{{ $package->title }}</a>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('gallery') }}" @class(['p-3', 'active' => request()->routeIs('gallery')])>Gallery</a>

            <a href="{{ route('contact') }}" @class(['p-3', 'active' => request()->routeIs('contact')])>

                Contact Us
            </a>

        </div>

    </div>

    <div class="flex items-center text-white">

        <button class="ml-auto lg:hidden" type="button" @click="showMenu=true">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
            </svg>
        </button>

        <a class="ml-auto hidden items-center gap-2 rounded-full p-2 px-3 text-[13px] font-medium text-white lg:flex"
            href="{{ route('contact') }}">

            Contact Us
        </a>
    </div>
</nav>
