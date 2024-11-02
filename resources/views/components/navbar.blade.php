<nav {{ $attributes->merge(['class' => 'p-3 grid grid-cols-2 lg:grid-cols-3']) }} x-data="{
    showMenu: false
}">
    <div>
        <x-logo />
    </div>
    <div class="hidden items-center justify-center gap-3 text-[13px] text-white lg:flex">
        <a href="{{ route('about') }}" @class(['p-3', 'active' => request()->routeIs('about')])>About Us</a>
        <a href="{{ route('blogs') }}" @class(['p-3', 'active' => request()->routeIs('blogs')])>Blog</a>
        <a href="{{ route('gallery') }}" @class(['p-3', 'active' => request()->routeIs('gallery')])>Gallery</a>
        <a href="{{ route('packages') }}" @class(['p-3', 'active' => request()->routeIs('packages')])>Packages</a>
    </div>
    {{-- mobile menu --}}
    <div class="fixed inset-0 z-50 grid place-items-center text-white backdrop-blur-3xl" x-transition x-show="showMenu">

        <button class="fixed right-4 top-4" type="button" @click="showMenu=false">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>
        <div class="flex flex-col items-center justify-center gap-3">
            <a href="{{ route('about') }}" @class(['p-3', 'active' => request()->routeIs('home')])>Home</a>
            <a href="{{ route('about') }}" @class(['p-3', 'active' => request()->routeIs('about')])>About Us</a>
            <a href="{{ route('blogs') }}" @class(['p-3', 'active' => request()->routeIs('blogs')])>Blog</a>
            <a href="{{ route('gallery') }}" @class(['p-3', 'active' => request()->routeIs('gallery')])>Gallery</a>
            <a href="{{ route('packages') }}" @class(['p-3', 'active' => request()->routeIs('packages')])>Packages</a>
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
            href="tel:+">

            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                </path>
            </svg>

            Contact Us
        </a>
    </div>
</nav>
