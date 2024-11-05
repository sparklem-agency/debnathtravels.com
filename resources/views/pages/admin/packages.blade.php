<?php

use App\Models\Package;
use Livewire\Volt\Component;

new class extends Component {
    public $id;

    public function mount()
    {
        $this->id = request('id');
    }

    public function with(): array
    {
        $packages = Package::paginate();

        return compact('packages');
    }
};

?>

<x-admin-layout title="packages">

    @volt('admin.packages')
        <div>
            <x-mary-header title='packages'>

                <x-slot:actions>
                    <x-mary-button class="btn-primary" icon="o-plus" :link="route('admin.packages.create')" />
                </x-slot:actions>
            </x-mary-header>

            <livewire:datatables.package-table />
        </div>
    @endvolt
</x-admin-layout>
