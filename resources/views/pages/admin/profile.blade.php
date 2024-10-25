<?php

use function Laravel\Folio\name;

name('profile');

?>

<x-admin-layout title="Profile">
    <x-jui::heading size="lg">Profile</x-jui::heading>
    <x-jui::breadcrumbs>
        <x-jui::breadcrumbs.item href="{{ route('dashboard') }}">Home</x-jui::breadcrumbs.item>
        <x-jui::breadcrumbs.item>Profile</x-jui::breadcrumbs.item>
    </x-jui::breadcrumbs>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="space-y-5">
            <x-jui::section>
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </x-jui::section>

            <x-jui::section>
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </x-jui::section>

            <x-jui::section>
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </x-jui::section>
        </div>
    </div>
</x-admin-layout>
