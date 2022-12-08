
@extends('layouts.app')

@section('content')
    {{-- TITLE --}}
    <x-form.title-form :text="'Aggiungi nuovo cliente'" />

    {{-- FORM --}}
    <form
        action="{{ route('clients.store') }}"
        method='POST'
        class="form"
    >
    @csrf 

        {{-- CLIENT --}}
        <div class="mb-6">
            <x-form.label :for="'client'" :text="'Cliente'" />
            <x-form.input :type="'text'" :name="'client'" :oldValue="'client'"/>
            <x-message.error-message :name="'client'" :text="'Cliente'" />
        </div>

        <div class="flex gap-2">
            {{-- ADDRESS --}}
            <div class="mb-6 w-full">
                <x-form.label :for="'address'" :text="'Indirizzo'" />
                <x-form.input :type="'text'" :name="'address'" :oldValue="'address'"/>
                <x-message.error-message :name="'address'" :text="'Indirizzo'" />
            </div>

            {{-- NUMBER --}}
            <div class="mb-6">
                <x-form.label :for="'number'" :text="'Numero'" />
                <x-form.input :type="'text'" :name="'number'" :oldValue="'number'"/>
                <x-message.error-message :name="'number'" :text="'Numero'" />
            </div>
        </div>

        {{-- CITY --}}
        <div class="mb-6">
            <x-form.label :for="'city'" :text="'Città'" />
            <x-form.input :type="'text'" :name="'city'" :oldValue="'city'"/>
            <x-message.error-message :name="'city'" :text="'Città'" />
        </div>

        <div class="flex gap-2">
            {{-- PROVINCIA --}}
            <div class="mb-6 w-full">
                <x-form.label :for="'province'" :text="'Provincia'" />
                <x-form.input :type="'text'" :name="'province'" :oldValue="'province'"/>
                <x-message.error-message :name="'province'" :text="'Provincia'" />
            </div>

            {{-- CAP --}}
            <div class="mb-6">
                <x-form.label :for="'cap'" :text="'CAP'" />
                <x-form.input :type="'text'" :name="'cap'" :oldValue="'cap'"/>
                <x-message.error-message :name="'cap'" :text="'CAP'" />
            </div>
        </div>

        {{-- P.IVA --}}
        <div class="mb-6">
            <x-form.label :for="'p_iva'" :text="'P.IVA'" />
            <x-form.input :type="'text'" :name="'p_iva'" :oldValue="'p_iva'"/>
            <x-message.error-message :name="'p_iva'" :text="'P.IVA'" />
        </div>

        {{-- REFERENT --}}
        <div class="mb-6">
            <x-form.label :for="'referent'" :text="'Referente'" />
            <x-form.input :type="'text'" :name="'referent'" :oldValue="'referent'"/>
            <x-message.error-message :name="'referent'" :text="'Referente'" />
        </div>

        {{-- CONTACT --}}
        <div class="mb-6">
            <x-form.label :for="'contact'" :text="'Contatto'" />
            <x-form.input :type="'text'" :name="'contact'" :oldValue="'contact'"/>
            <x-message.error-message :name="'contact'" :text="'Contatto'" />
        </div>

        <button type="submit">Crea</button>

    </form>

@endsection