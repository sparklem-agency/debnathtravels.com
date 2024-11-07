<?php

use App\Models\Package;
$packages = Package::paginate();
?>

<div class="w-full rounded-2xl bg-gray-200 py-16" data-aos="fade-up">
    <x-heading class="mt-8" title="Packages">
        Top Places At Unbeatable prices
    </x-heading>

    <div class="mt-5 w-full">
        @if ($packages && count($packages))

            <div class="flex flex-shrink-0 flex-row gap-5 overflow-x-auto p-4">
                @foreach ($packages as $package)
                    <x-package-card :item="$package" :editable="false" />
                @endforeach

            </div>
            @if (!count($packages))
                <center>No posts found</center>
            @endif
        @endif

        {{ $packages ? $packages->links() : '' }}
    </div>
</div>
