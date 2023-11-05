<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function getAll()
    {
        $clients = Client::paginate(12);
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(ClientStoreRequest $request)
    {
        $data = $request->validated();
        Client::create($data);
        return redirect()->route('client.index');
    }

    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Client $client, ClientUpdateRequest $request)
    {
        $data = $request->validated();
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
