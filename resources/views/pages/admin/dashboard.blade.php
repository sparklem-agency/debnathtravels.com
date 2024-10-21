<?php
use function Laravel\Folio\name;

name('dashboard');

?>
<x-admin-layout title="dashboard">
    <x-jui::heading size='lg'>Dashboard</x-jui::heading>
    <x-jui::breadcrumbs>
        <x-jui::breadcrumbs.item :href="route('dashboard')">Home</x-jui::breadcrumbs.item>

        <x-jui::breadcrumbs.item>Dashboard</x-jui::breadcrumbs.item>
    </x-jui::breadcrumbs>

</x-admin-layout>
