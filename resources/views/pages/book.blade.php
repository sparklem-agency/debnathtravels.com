<?php
use function Laravel\Folio\name;

name('book');

?>

<x-app-layout title="Book">
    <x-page-heading>
        Book
    </x-page-heading>
    <div class="p-5 py-10">


        <x-contact-form />


        <div class="mt-10">
            <x-packages />
        </div>

        <div class="mt-10">
            <x-car-collection />
        </div>

        <div class="mt-10">
            <x-why-choose-us />
        </div>

        <x-cta />
    </div>
</x-app-layout>
