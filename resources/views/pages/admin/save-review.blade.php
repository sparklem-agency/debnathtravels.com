<?php

use App\Models\User;
use App\Models\Review;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use JoydeepBhowmik\LaravelMediaLibary\Models\Media;

new class extends Component {
    use WithFileUploads;

    public $avatar;
    public $name;
    public $body;
    public $stars;

    function save()
    {
        $this->validate([
            'avatar' => ['required', 'image'],
            'name' => ['required'],
            'body' => ['required'],
            'stars' => ['required', 'max:5'],
        ]);

        $review = new Review();

        $review->username = $this->name;

        $review->body = $this->body;

        $review->stars = $this->stars;

        if ($review->save()) {
            $review->addMedia($this->avatar)->toCollection('avatar');
        }

        $this->reset();
    }

    function delete(string $id)
    {
        $review = Review::find($id);

        $review && $review->delete();
    }

    function with()
    {
        $reviews = Review::all();

        return compact('reviews');
    }
};

?>

<x-admin-layout title="Reviews">
    @volt('Reviews')
        <div>
            <x-mary-header title="Reviews" separator />

            <x-mary-form wire:submit='save'>
                <x-mary-file wire:model='avatar' label="avatar">
                    <img class="size-14" src="https://avatar.iran.liara.run/public" alt="">
                </x-mary-file>

                <x-mary-input label="Name" wire:model='name' />

                <x-mary-textarea label="Body" wire:model='body' />

                <x-mary-input label='Stars' wire:model="stars" />

                <x-slot:actions>
                    <x-mary-button type="submit">Save</x-mary-button>
                </x-slot:actions>
            </x-mary-form>

            <div>
                @foreach ($reviews as $review)
                    <div>
                        <button type="button" wire:confirm='are you sure?' wire:click='delete("{{ $review->id }}")'>
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z">
                                </path>
                            </svg>
                        </button>
                        <x-review-card :review="$review" />
                    </div>
                @endforeach
            </div>
        </div>
    @endvolt
</x-admin-layout>
