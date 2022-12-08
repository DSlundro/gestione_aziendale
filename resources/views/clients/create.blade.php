
@extends('layouts.app')

@section('content')

<x-form.title-form :text="'Aggiungi nuovo cliente'" />
<form
    action="{{ route('clients.store') }}"
    method='POST'
    class="form"
>
@csrf 

    <div class="mb-6">
        <x-form.label
            :for="'client'" 
            :text="'Cliente'"
        />
        <x-form.input 
            :type="'text'" 
            :name="'client'" 
            :value="'$client->client'"
        />
        <x-message.error-message 
            :name="'client'" 
            :text="'Cliente'"
        />
    </div>

    <button type="submit">Crea</button>

</form>

@endsection