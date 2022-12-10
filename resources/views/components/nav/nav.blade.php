<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('DASHBOARD') }}
    </x-nav.nav-link>

    <x-nav.nav-link :href="route('clients.index')" :active="request()->routeIs('clients.index')">
        {{ __('CLIENTI') }}
    </x-nav.nav-link>
</div>