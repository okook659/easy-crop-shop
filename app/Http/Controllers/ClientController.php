<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Client;

class ClientController extends Controller
{
    protected $updating = false;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $updating = $this->updating;
        return view('client.form', compact('updating'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>'required|string',
            'telephone'=>'required|string',
            'adresse'=>'required|string'
        ]);
        $client = Client::create($request->all());
        if($client->save()){
            return redirect('/clients')->with('message', 'Client créé avec succès');
        }else{
            return back()->with('message', 'Erreur lors de la création du client... Veuillez recommencer');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->updating = true;
        $updating = $this->updating;
        $client = Client::find($id);
        return view('client.form', compact('updating', 'client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'designation'=>'required|string',
            'telephone'=>'required|string',
            'adresse'=>'required|string',
        ]);
        
        $client = Client::find($id);
        $client->designation = $request->designation;
        $client->telephone = $request->telephone;
        $client->adresse = $request->adresse;
        if($client->save()){
            return redirect('/clients')->with('message', 'Client modifié avec succès');
        }else{
            return back()->with('message', 'Erreur lors de la modification du client... Veuillez recommencer');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $res = Client::find($id)->delete();
        if($res){
            return redirect('/clients')->with('message', 'Client supprimé avec succès');
        }else{
            return back()->with('message', 'Erreur lors de la suppression du client... Veuillez recommencer');
        }
    }
}
