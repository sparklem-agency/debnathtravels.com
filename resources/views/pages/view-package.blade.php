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
                Packages / {{ $package->title }}
            </x-page-heading>
            <div class="bg-gray-100 p-5 py-10">

                <div class="prose mx-auto">

                    @php
                        $Parsedown = new Parsedown();
                    @endphp
                    {!! $Parsedown->text($package->description) !!}

                </div>
                <center>
                    <a class="mt-5 inline-flex items-center gap-2 rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        href="{{ env('PHONE_NUMBER') }}">

                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>

                        Book Now

                    </a>
                </center>

            </div>
        </div>
    @endvolt
</x-app-layout>
