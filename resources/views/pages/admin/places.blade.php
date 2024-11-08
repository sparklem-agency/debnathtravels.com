<x-admin-layout title="places">

    @volt('admin.places')
        <div>
            <x-mary-header title='places'>

                <x-slot:actions>
                    <x-mary-button class="btn-primary" icon="o-plus" :link="route('admin.places.create')" />
                </x-slot:actions>
            </x-mary-header>

            <livewire:DataTables.place-table />
        </div>
    @endvolt
</x-admin-layout>
