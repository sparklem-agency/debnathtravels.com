<x-admin-layout title="cars">

    @volt('admin.cars')
        <div>
            <x-mary-header title='cars'>

                <x-slot:actions>
                    <x-mary-button class="btn-primary" icon="o-plus" :link="route('admin.cars.create')" />
                </x-slot:actions>
            </x-mary-header>

            <livewire:datatables.car-table />
        </div>
    @endvolt
</x-admin-layout>
