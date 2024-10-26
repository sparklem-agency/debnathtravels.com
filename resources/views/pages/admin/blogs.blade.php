<x-admin-layout title="Blogs">
    <x-jui::section title="Blogs">
        <x-slot name='action'>
            <a href="{{ route('admin.blogs.create') }}" x-navigate>
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
                </svg>
            </a>
        </x-slot>
        <livewire:data-tables.blogtable />
    </x-jui::section>
</x-admin-layout>
