<?php

use App\Models\User;
use App\Models\Car;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use JoydeepBhowmik\LaravelMediaLibary\Models\Media;

new class extends Component {
    use WithFileUploads;

    public $photo;
    public $description;
    public $name;
    public $type;
    public $seats;
    public $order;
    public $id;

    function mount()
    {
        $id = request('id');

        if (!$id) {
            return;
        }

        $this->id = $id;

        $car = Car::find($this->id);

        if (!$car) {
            abort(404);
        }

        $this->name = $car->name;

        $this->seats = $car->seats;

        $this->description = $car->description;

        $this->type = $car->type;

        $this->order = $car->order;
    }

    function save()
    {
        $this->validate([
            'photo' => ['nullable', 'image'],
            'name' => ['required'],
            'description' => ['required'],
            'seats' => ['required'],
            'type' => ['required'],
            'order' => ['required'],
        ]);

        $car = $this->id ? Car::find($this->id) : new car();

        $car->name = $this->name;

        $car->seats = $this->seats;

        $car->description = $this->description;

        $car->type = $this->type;

        $car->order = $this->order;

        if ($car->save()) {
            $car->addMedia($this->photo)->toCollection('photo');
        }

        $this->reset();
    }

    function delete(string $id)
    {
        $car = Car::find($this->id);

        $car && $car->delete();
    }

    function with()
    {
        $car = Car::find($this->id);

        $cars = Car::all();

        return compact('car', 'cars');
    }
};

?>

<x-admin-layout title="cars">
    @volt('cars')
        <div>
            <x-mary-header title="cars" separator />

            <x-mary-form wire:submit='save'>
                <x-mary-file wire:model='photo' label="avatar">
                    <img class="size-14"
                        src="{{ $car?->getFirstMediaUrl('photo') ?? 'https://motozitelive.blob.core.windows.net/motozite-live/newcars_images/1670408218No-Image.jpg' }}"
                        alt="">
                </x-mary-file>

                <x-mary-input label="Name" wire:model='name' />

                <x-mary-textarea label="description" wire:model='description' />

                <x-mary-input label='type' wire:model="type" />

                <x-mary-input label='Seats' wire:model="seats" />

                <x-mary-input label='order' wire:model="order" />

                <x-slot:actions>
                    <x-mary-button type="submit">Save</x-mary-button>
                </x-slot:actions>
            </x-mary-form>

            <div>
                @foreach ($cars as $car)
                    <div>
                        <button type="button" wire:confirm='are you sure?' wire:click='delete("{{ $car->id }}")'>
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                </path>
                            </svg>
                        </button>
                        <x-car-card :car="$car" />
                    </div>
                @endforeach
            </div>
        </div>
    @endvolt
</x-admin-layout>
