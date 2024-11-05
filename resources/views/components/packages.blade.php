<?php

use App\Models\Package;
$packages = Package::paginate();
?>

<div class="rounded-2xl bg-gray-200 p-5 py-16">
    <x-heading class="mt-8" title="Packages">
        Top Places At Unbeatable prices
    </x-heading>

    <div class="mt-5">
        @if ($packages && count($packages))

            <div class="grid grid-cols-1 gap-10 p-2 lg:grid-cols-3 lg:p-5">
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
