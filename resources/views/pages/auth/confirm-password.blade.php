<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $password = '';

    /**
     * Confirm the current user's password.
     */
    public function confirmPassword(): void
    {
        $this->validate([
            'password' => ['required', 'string'],
        ]);

        if (
            !Auth::guard('web')->validate([
                'email' => Auth::user()->email,
                'password' => $this->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-guest-layout title="Confirm Password">

    @volt('confirm-password')
        <div>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form wire:submit="confirmPassword">
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input class="mt-1 block w-full" id="password" name="password" type="password" wire:model="password"
                        required autocomplete="current-password" />

                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>

                <div class="mt-4 flex justify-end">
                    <x-primary-button wireTarget="confirmPassword">
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    @endvolt
</x-guest-layout>
