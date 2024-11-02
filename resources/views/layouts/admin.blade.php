@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.bubble.css" rel="stylesheet" />
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

    {{-- EasyMDE --}}
    <link href="https://unpkg.com/easymde/dist/easymde.min.css" rel="stylesheet">
    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" rel="stylesheet" />

    {{-- Sortable.js --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.1/Sortable.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-base-200/50 font-sans antialiased dark:bg-base-200">

    {{-- NAVBAR mobile only --}}
    <x-mary-nav class="lg:hidden" sticky>
        <x-slot:brand>
            <div class="ml-5 pt-5">
                <x-application-logo class="size-8" />

            </div>
        </x-slot:brand>
        <x-slot:actions>
            <label class="mr-3 lg:hidden" for="main-drawer">
                <x-mary-icon class="cursor-pointer" name="o-bars-3" />
            </label>
        </x-slot:actions>
    </x-mary-nav>

    {{-- MAIN --}}
    <x-mary-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar class="bg-base-100 lg:bg-inherit" drawer="main-drawer" collapsible>

            {{-- BRAND --}}
            <div class="ml-5 pt-5">
                <x-application-logo class="size-8" />
            </div>

            {{-- MENU --}}
            <x-mary-menu activate-by-route>

                {{-- User --}}
                @if ($user = auth()->user())
                    <x-mary-menu-separator />

                    <x-mary-list-item class="-mx-mary-2 !-my-2 rounded" value="name" :item="$user"
                        sub-value="email" no-separator no-hover>
                        <x-slot:actions>
                            <x-mary-button class="btn-circle btn-ghost btn-xs" icon="o-power" tooltip-left="logoff"
                                no-wire-navigate link="/logout" />
                        </x-slot:actions>
                    </x-mary-list-item>

                    <x-mary-menu-separator />
                @endif

                <x-mary-menu-item title="Dashboard" icon="o-home" :link="route('dashboard')" :active="request()->routeIs('dashboard')" />

                <x-mary-menu-item title="Gallery" icon="o-photo" :link="route('admin.gallery')" :active="request()->routeIs('admin.gallery')" />

                <x-mary-menu-item title="Packages" icon="o-archive-box" :link="route('admin.packages')" :active="request()->routeIs('admin.packages')" />

                <x-mary-menu-item title="Blogs" icon="o-document" :link="route('admin.blogs')" :active="request()->routeIs('admin.packages')" />

                <x-mary-menu-item title="reviews" icon="o-star" :link="route('admin.review')" :active="route('admin.review')" />
            </x-mary-menu>
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-mary-main>

    {{-- Toast --}}
    <x-mary-toast />
</body>

@livewireScripts
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

</html>
