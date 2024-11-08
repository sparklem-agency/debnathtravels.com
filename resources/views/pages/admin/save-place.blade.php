<?php
use App\Models\Place;
use Mary\Traits\Toast;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use function Livewire\Volt\{state, mount, usesFileUploads, with};

new class extends Component {
    use WithFileUploads, Toast;

    public $photo;
    public $id;
    public $name;
    public $link;
    public $ordering;

    function mount()
    {
        $this->id = request('id');

        if (!$this->id) {
            return;
        }

        $place = Place::find($this->id);

        if (!$place) {
            abort(404);
        }

        $this->name = $place->name;

        $this->ordering = $place->ordering;

        $this->link = $place->link;
    }
    function save()
    {
        $this->validate([
            'name' => ['required'],
            'photo' => ['image', 'nullable'],
            'ordering' => ['integer', 'nullable'],
            'link' => ['nullable'],
        ]);

        $place = $this->id ? Place::find($this->id) : new Place();

        $place->name = $this->name;

        $place->ordering = $this->ordering;

        $place->link = $this->link;

        if ($place->save()) {
            if ($this->photo) {
                $place->deleteMediaCollection('photo');
                $place->addMedia($this->photo)->toCollection('photo');
            }

            $this->success(title: 'Place Saved');

            $this->redirect(route('admin.places'));
        }
    }
    function with()
    {
        $place = Place::find($this->id);

        if ($this->id && !$place) {
            return abort(404);
        }

        return compact('place');
    }
};

?>

<x-admin-layout>

    @volt('save-Place')
        <div>
            <x-slot:title>{{ $id ? 'Edit place ' . $place->name : 'Create place' }}</x-slot:title>
            <x-mary-form wire:submit="save">

                <x-mary-header :title="$place ? 'Edit place' : 'Create place'" separator />

                <x-mary-file wire:model="photo" label="Photo" accept="image/png, image/jpeg">
                    <img class="h-40 rounded-lg"
                        src="{{ $place?->getFirstMediaUrl('photo') ?? url('/photo-placeholder.jpg') }}" />

                </x-mary-file>

                <x-mary-input label="Name" wire:model="name" />

                <x-mary-input label="Link" wire:model="link" />

                <x-mary-input label="Order" wire:model="ordering" />
                <x-slot:actions>

                    <x-mary-button class="btn-primary" type="submit" label="Save" spinner="save" />
                </x-slot:actions>
            </x-mary-form>

        </div>
    @endvolt
</x-admin-layout>
