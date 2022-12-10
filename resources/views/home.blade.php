@extends('layouts.welcome')

@section('content')

    <div class="form-container w-[400px] h-[350px] aspect-square flex flex-col items-center justify-center gap-2">
        <div  class="flex justify-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-green-500" />
            </a>
        </div>
        @auth
            <p class="pt-6">Consulta la dashboard</p>
            <div class="flex justify-center mt-12">
                <x-buttons.link-button 
                    :class="__('_primary-button')"
                    :route="__('dashboard')"
                    :text="__('Dashboard')"
                />
            </div>
        @else
            <p class="pt-6 font-bold text-xl">Per proseguire fai il login.</p>
            <div class="flex justify-center gap-4 mt-12">
                <x-buttons.link-button 
                    :class="__('_primary-button')"
                    :route="__('login')"
                    :text="__('Log in')"
                />
            </div>
        @endauth
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <div class="flex">
                        <x-nav.dropdown />
                    </div>
                @endauth
            </div>
        @endif
    </div>

@endsection