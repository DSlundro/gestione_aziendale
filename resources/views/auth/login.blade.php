@extends('layouts.welcome')

@section('content')

    <div class="form-container py-12">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div  class="flex justify-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-green-500" />
            </a>
        </div>

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            {{-- EMAIL --}}
            <div>
                <x-form.label :text="__('Email')" :for="__('email')" />
                <x-form.input :type="__('email')" :name="__('email')" :oldValue="__('email')"
                    required autofocus />
                <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- PASSWORD --}}
            <div class="mt-4">
                <x-form.label :text="__('Password')" :for="__('password')" />
                <x-form.input :type="__('password')" :name="__('password')" :oldValue="__('')"
                    required autocomplete="current-password" />
                <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-0" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ricordami') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Password dimenticata?') }}
                    </a>
                @endif

                <x-buttons.primary-button :text="__('Log in')" :class="__('ml-4')" />
            </div>
        </form>
    </div>
@endsection
