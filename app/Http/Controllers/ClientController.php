<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        $col_names = Schema::getColumnListing('clients');
        return view('clients.index', compact('clients', 'col_names'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ClientType::all();
        return view('clients.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client'            =>  'required',
            'client_type_id'    =>  'required',
            'address'           =>  'required',
            'number'            =>  'required',
            'city'              =>  'required',
            'province'          =>  'required',
            'cap'               =>  'required',
            'p_iva'             =>  'nullable',
            'reference'         =>  'nullable',
            'contact'           =>  'nullable',
        ]);

        Client::create($validated);
        return redirect('clients')->with('status', 'Cliente aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        $types = ClientType::all();
        return view('clients.edit', compact('client', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $validated = $request->validate([
            'client'            =>  'required',
            'client_type_id'    =>  'required',
            'address'           =>  'required',
            'number'            =>  'required',
            'city'              =>  'required',
            'province'          =>  'required',
            'cap'               =>  'required',
            'p_iva'             =>  'nullable',
            'reference'         =>  'nullable',
            'contact'           =>  'nullable',
        ]);

        $client->update($validated);
        return redirect('clients')->with('status', 'Cliente modificato con successo!');
    }
}
