@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="_container">
        <div class="flex gap-x-14 items-center">
            <x-buttons.link-button :route="'clients.create'" :text="'Aggiungi'" />
            <x-success-message />
        </div>
        <div class="_table-container">
            <x-table.table :clients='$clients'/>
        </div>
    </div>
</div>
@endsection
