<div>
    <table class="_table">

        <!-- ========== Start TABLE HEAD ========== -->
        <thead class="_table-thead">
            <tr>
                <x-table.table-head-cell 
                    :data="[
                        'ID',
                        'Cliente',
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
                        <x-buttons.show-button 
                            :route="'clients.show'" 
                            :id='$client->id'
                        />
                        {{-- EDIT --}}
                        <x-buttons.edit-button 
                            :route="'clients.edit'" 
                            :id='$client->id' 
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
        <!-- ========== End TABLE BODY ========== -->
        
    </table>
</div>