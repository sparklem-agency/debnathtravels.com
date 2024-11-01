<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-guest-layout title="Register">
    @volt
        <div>
            <x-mary-header title='Create Account' />
            <x-mary-form wire:submit="register">
                <!-- Name -->
                <div>

                    <x-mary-input class="mt-1 block w-full" id="name" name="name" type="text" inline label='Name'
                        wire:model="name" autofocus autocomplete="name" />

                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-mary-input class="mt-1 block w-full" id="email" name="email" type="email" inline
                        label="Email" wire:model="email" autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-mary-password class="mt-1 block w-full" id="password" name="password" type="password" inline right
                        label="Password" wire:model="password" autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">

                    <x-mary-password class="mt-1 block w-full" id="password_confirmation" name="password_confirmation"
                        type="password" label=" confirm password" inline right wire:model="password_confirmation"
                        autocomplete="new-password" />

                </div>

                <div class="mt-4 flex items-center justify-end">
                    <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}" wire:navigate>
                        {{ __('Already registered?') }}
                    </a>

                    <x-slot:actions>
                        <x-mary-button type="submit">
                            {{ __('Register') }}
                        </x-mary-button>
                    </x-slot:actions>
                </div>
            </x-mary-form>
        </div>
    @endvolt
</x-guest-layout>
