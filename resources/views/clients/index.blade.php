@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="_container">
        <div class="flex gap-x-14 items-center">
            <x-buttons.link-button :route="'clients.create'" :text="'Aggiungi'" :class="('_primary-button my-6')"/>
            <x-success-message />
        </div>
        <div class="_table-container">
            <div>
                <table class="_table">
            
                    <!-- ========== Start TABLE HEAD ========== -->
                    <thead class="_table-thead">
                        <tr>
                            <x-table.table-head-cell 
                                :data="[
                                    'ID',
                                    'Cliente',
                                    'Tipo',
                                    'Indirizzo',
                                    'Città',
                                    'Provincia',
                                    'CAP',
                                    'P.IVA',
                                    'Referente',
                                    'Contatto',
                                    'Actions'
                                ]"
                            />
                        </tr>
                    </thead>
                    <!-- ========== End TABLE HEAD ========== -->
            
                    <!-- ========== Start TABLE BODY ========== -->
                    <tbody>
                        @foreach ($clients as $client)
                            <tr class="_table-tbody">
                                <x-table.table-body-cell 
                                    :data="[
                                        $client->id,
                                        $client->client,
                                        $client->client_type->name,
                                        $client->address . ', ' . $client->number,
                                        $client->city,
                                        $client->province,
                                        $client->cap,
                                        $client->p_iva,
                                        $client->reference,
                                        $client->contact,
                                    ]"
                                />
                                <td>
                                    {{-- SHOW --}}
                                    <x-buttons.link-button 
                                        :route="__('clients.show')" 
                                        :id='$client->id'
                                        :text="__('Dettagli')"
                                        :class="__('_primary-button')"
                                    />
                                    {{-- EDIT --}}
                                    <x-buttons.link-button 
                                        :route="__('clients.edit')" 
                                        :id="$client->id"
                                        :text="__('Modifica')"
                                        :class="__('_secondary-button')"
                                    />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <!-- ========== End TABLE BODY ========== -->
                    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
