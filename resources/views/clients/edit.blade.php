
@extends('layouts.app')

@section('content')
<section class="form-section">
    <div class="form-container">
        {{-- TITLE --}}
        <x-form.title-form :text="'Modifica il cliente'" />

        {{-- FORM --}}
        <form
            action="{{ route('clients.update', $client->id) }}"
            method='POST'
            class="form"
        >
        @method('PUT')
        @csrf

            <div class="_group-input">
                {{-- CLIENT --}}
                <div class="w-full">
                    <x-form.label :for="'client'" :text="'Cliente'" />
                    <x-form.input :type="'text'" :name="'client'" :value="$client->client"/>
                    <x-message.error-message :name="'client'" :text="'Cliente'" />
                </div>

                {{-- CLIENT TYPE --}}
                <div>
                    <x-form.label :for="'client_type'" :text="'Cliente'" />
                    <select name="client_type_id" class="input w-[133px]">
                        <option value="" disabled></option>
                        @foreach ($types as $type)
                            <option 
                                value="{{ $type->id }}" 
                                class="input"
                                @if (isset($client->client_type_id) && $type->id == $client->client_type_id)
                                    selected
                                @endif
                            >
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-message.error-message :name="'client_type_it'" :text="'Tipo Cliente'" />
                </div>
            </div>

            <div class="_group-input">
                {{-- ADDRESS --}}
                <div class="w-full">
                    <x-form.label :for="'address'" :text="'Indirizzo'" />
                    <x-form.input :type="'text'" :name="'address'" :value="$client->address"/>
                    <x-message.error-message :name="'address'" :text="'Indirizzo'" />
                </div>

                {{-- NUMBER --}}
                <div>
                    <x-form.label :for="'number'" :text="'Numero'" />
                    <x-form.input :type="'text'" :name="'number'" :value="$client->number"/>
                    <x-message.error-message :name="'number'" :text="'Numero'" />
                </div>
            </div>

            {{-- CITY --}}
            <div>
                <x-form.label :for="'city'" :text="'Città'" />
                <x-form.input :type="'text'" :name="'city'" :value="$client->city"/>
                <x-message.error-message :name="'city'" :text="'Città'" />
            </div>

            <div class="_group-input">
                {{-- PROVINCIA --}}
                <div class="w-full">
                    <x-form.label :for="'province'" :text="'Provincia'" />
                    <x-form.input :type="'text'" :name="'province'" :value="$client->province"/>
                    <x-message.error-message :name="'province'" :text="'Provincia'" />
                </div>

                {{-- CAP --}}
                <div>
                    <x-form.label :for="'cap'" :text="'CAP'" />
                    <x-form.input :type="'text'" :name="'cap'" :value="$client->cap"/>
                    <x-message.error-message :name="'cap'" :text="'CAP'" />
                </div>
            </div>

            {{-- P.IVA --}}
            <div>
                <x-form.label :for="'p_iva'" :text="'P.IVA'" />
                <x-form.input :type="'text'" :name="'p_iva'" :value="$client->p_iva"/>
                <x-message.error-message :name="'p_iva'" :text="'P.IVA'" />
            </div>

            {{-- REFERENT --}}
            <div>
                <x-form.label :for="'referent'" :text="'Referente'" />
                <x-form.input :type="'text'" :name="'referent'" :value="$client->reference"/>
                <x-message.error-message :name="'referent'" :text="'Referente'" />
            </div>

            {{-- CONTACT --}}
            <div>
                <x-form.label :for="'contact'" :text="'Contatto'" />
                <x-form.input :type="'text'" :name="'contact'" :value="$client->contact"/>
                <x-message.error-message :name="'contact'" :text="'Contatto'" />
            </div>

            {{-- BUTTON --}}
            <x-buttons.primary-button :text="'Aggiungi'" :class="'my-6'"/>

        </form>
    </div>
</section>
@endsection