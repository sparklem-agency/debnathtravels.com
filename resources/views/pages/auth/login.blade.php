<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-guest-layout title="login">

    @volt('login')
        <div>

            <form wire:submit="login">
                <x-mary-header title='Login' />
                <!-- Email Address -->
                <div>
                    <x-mary-input class="mt-1 block w-full" id="email" name="email" type="email" inline label="Email"
                        wire:model="form.email" autofocus autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <x-mary-password class="mt-1 block w-full" id="password" name="password" type="password" inline right
                        label='Password' wire:model="form.password" autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="mt-4 block">
                    <x-mary-checkbox wire:model="form.remember" label='Remember me' />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    @if (Route::has('password.request'))
                        <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}" wire:navigate>
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-mary-button class="ms-3" type="submit" wireTarget="login">
                        {{ __('Log in') }}
                    </x-mary-button>
                </div>
            </form>
        </div>
    @endvolt
</x-guest-layout>
