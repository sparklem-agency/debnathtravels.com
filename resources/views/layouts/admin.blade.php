@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.bubble.css" rel="stylesheet" />
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div
            class="fixed left-0 right-0 top-0 z-20 flex h-16 items-center border-b bg-white p-3 shadow-sm dark:border-gray-800 dark:bg-gray-900 dark:text-white">
            <x-jui::heading class="italic" size="lg">Admin Panel</x-jui::heading>

            <div class="ml-auto flex items-center gap-4">
                <a href="{{ route('profile') }}" x-navigate>
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>
                <x-jui::dark-mode-toggle />
            </div>
        </div>
        <div class="fixed bottom-0 left-0 top-16 w-[300px] overflow-y-auto border-r p-3 dark:border-gray-800">
            <a class="frounded-md p-3 hover:bg-slate-200" href="{{ route('dashboard') }}" x-navigate>

                <x-jui::heading class="flex w-full items-center gap-3" size="lg">
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21 20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V9.48907C3 9.18048 3.14247 8.88917 3.38606 8.69972L11.3861 2.47749C11.7472 2.19663 12.2528 2.19663 12.6139 2.47749L20.6139 8.69972C20.8575 8.88917 21 9.18048 21 9.48907V20ZM19 19V9.97815L12 4.53371L5 9.97815V19H19Z">
                        </path>
                    </svg>
                    Dashboard
                </x-jui::heading>

            </a>

            <x-jui::accordion exclusive>
                <x-jui::accordion.item heading="Pages">
                    <div class="flex flex-col gap-3 p-3">
                        <a href="" x-navigate>Home</a>
                        <a href="" x-navigate>About</a>
                        <a href="" x-navigate>Contact</a>
                        <a href="" x-navigate>Blog</a>
                        <a href="" x-navigate>Gallery</a>
                    </div>
                </x-jui::accordion.item>
                <x-jui::accordion.item heading="Pages">
                    <div>
                        <a href="" x-navigate>Home</a>
                        <a href="" x-navigate>About</a>
                        <a href="" x-navigate>Contact</a>
                        <a href="" x-navigate>Blog</a>
                        <a href="" x-navigate>Gallery</a>
                    </div>
                </x-jui::accordion.item>
            </x-jui::accordion>
        </div>
        <main class="ml-[300px] mt-16 p-5">{{ $slot }}</main>
    </div>
</body>
@livewireScripts

</html>
