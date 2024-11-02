<?php

use App\Models\Package;
$packages = Package::paginate();
?>

<div class="rounded-2xl bg-gray-200 p-5 py-16">
    <x-heading class="mt-8" title="Top Places At Unbeatable prices">
        Explore the best of Northeast India with our expertly curated
        tour packages. Let us guide you to breathtaking landscapes, rich cultures, and unforgettable experiences in this
        enchanting region.
    </x-heading>

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
