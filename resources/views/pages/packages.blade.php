<?php
use function Laravel\Folio\{name};

name('packages');

?>
<x-app-layout title="Packages">
    <x-page-heading>
        Packages
    </x-page-heading>
    <div class="p-5 py-10">
        <x-packages />
    </div>
</x-app-layout>
