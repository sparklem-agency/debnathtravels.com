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

            @if ($packages && count($packages))
                <div class="grid grid-cols-1 gap-10 p-2 lg:grid-cols-4 lg:p-5">
                    @foreach ($packages as $package)
                        <x-package-card :item="$package" editable />
                    @endforeach

                </div>
                @if (!count($packages))
                    <center>No posts found</center>
                @endif
            @endif

            {{ $packages ? $packages->links() : '' }}
        </div>
    @endvolt
</x-admin-layout>
