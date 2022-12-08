@extends('layouts.app')

@section('content')
    <section>
        <div class="flex flex-col">
            <p>ID:          {{ $client->id }}</p>
            <p>Cliente:     {{ $client->client }}</p>
            <p>Indirizzo:   {{ $client->address }}</p>
            <p>Città:       {{ $client->city }}</p>
            <p>Provincia:   {{ $client->province }}</p>
            <p>P.IVA:       {{ $client->p_iva }}</p>
            <p>Referente:   {{ $client->reference }}</p>
            <p>Contatto:    {{ $client->contact }}</p>
        </div>
    </section>
@endsection