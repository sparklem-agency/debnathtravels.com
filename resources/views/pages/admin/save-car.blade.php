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
    public $price; // Added missing property
    public $fuel; // Added missing property

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

        // Initialize properties from the existing car data
        $this->name = $car->name;
        $this->seats = $car->seats;
        $this->description = $car->description;
        $this->type = $car->type;
        $this->price = $car->price; // Set price
        $this->fuel = $car->fuel; // Set fuel
        $this->order = $car->order;
    }

    function save()
    {
        $this->validate([
            'photo' => ['nullable', 'image'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'seats' => ['required', 'integer'],
            'type' => ['required', 'string'],
            'price' => ['required', 'numeric'], // Added validation for price
            'fuel' => ['required', 'string'], // Added validation for fuel
            'order' => ['nullable', 'integer'],
        ]);

        $car = $this->id ? Car::find($this->id) : new Car();

        // Set properties
        $car->name = $this->name;
        $car->seats = $this->seats;
        $car->description = $this->description;
        $car->type = $this->type;
        $car->price = $this->price;
        $car->fuel = $this->fuel;
        $car->order = $this->order;

        if ($car->save()) {
            if ($this->photo) {
                $car->deleteMediaCollection('photo');
                $car->addMedia($this->photo)->toCollection('photo');
            }
            $this->redirect(route('admin.cars'));
        }

        $this->reset();
    }

    function delete(string $id)
    {
        $car = Car::find($id);

        if ($car) {
            $car->delete();
        }
    }

    function with()
    {
        $car = Car::find($this->id);
        $cars = Car::all();

        return compact('car', 'cars');
    }
};

?>

<x-admin-layout title="Cars">
    @volt('cars')
        <div>
            <x-mary-header title="Cars" separator />

            <x-mary-form wire:submit='save'>
                <x-mary-file wire:model='photo' label="Avatar">
                    <img class="size-14"
                        src="{{ $car?->getFirstMediaUrl('photo') ?? 'https://motozitelive.blob.core.windows.net/motozite-live/newcars_images/1670408218No-Image.jpg' }}"
                        alt="">
                </x-mary-file>

                <x-mary-input label="Name" wire:model='name' />
                <x-mary-textarea label="Description" wire:model='description' />
                <x-mary-input label="Type" wire:model="type" />
                <x-mary-input label="Seats" wire:model="seats" />
                <x-mary-input label="Order" wire:model="order" />
                <x-mary-input label="Price" wire:model="price" /> <!-- Added missing field for price -->
                <x-mary-input label="Fuel" wire:model="fuel" /> <!-- Added missing field for fuel -->

                <x-slot:actions>
                    <x-mary-button type="submit">Save</x-mary-button>
                </x-slot:actions>
            </x-mary-form>

        </div>
    @endvolt
</x-admin-layout>
