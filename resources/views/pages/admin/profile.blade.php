<?php

use function Laravel\Folio\name;

name('profile');

?>

<x-admin-layout title="Profile">
    <x-mary-header size="lg" title="Profile" />


    <div class="py-8">
        <div class="space-y-5">
            <x-mary-card>
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </x-mary-card>

            <x-mary-card>
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </x-mary-card>

            <x-mary-card>
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </x-mary-card>
        </div>
    </div>
</x-admin-layout>
