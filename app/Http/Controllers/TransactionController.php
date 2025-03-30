<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Support\Facades\View;

class TransactionController extends Controller
{
    protected $updating = false; 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::get();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $updating = $this->updating;
        $produits = Produit::all();
        $clients = Client::all();
        return view('transaction.form', compact('updating', 'produits', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'typeTransaction'=>'required|string',
            'dateTransaction'=>'required|date',
            'quantiteTransitee'=>'required|numeric',
            'prix'=>'required|numeric',
            'client_id'=>'required|numeric',
            'produit_id'=>'required|numeric'
        ]);
        $transaction = Transaction::create($request->all());
        if ($transaction->save()) {
            return redirect('/transactions')->with([
                'message' => 'Transaction créée avec succès',
                'success' => true
            ]);
        } else {
            return back()->with([
                'message' => 'Erreur lors de la création de la transaction... Veuillez recommencer',
                'success' => false
            ]);
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->updating = true;
        $updating = $this->updating;
        $transaction = Transaction::find($id);
        $clients = Client::all();
        $clients = $clients->except([$transaction['client_id']]);
        $produits = Produit::all();
        $produits = $produits->except([$transaction['produit_id']]);
        return view('transaction.form', compact('updating','transaction', 'clients', 'produits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'typeTransaction'=>'required|string',
            'dateTransaction'=>'required|date',
            'quantiteTransitee'=>'required|numeric',
            'prix'=>'required|numeric',
            'client_id'=>'required|numeric',
            'produit_id'=>'required|numeric'
        ]);
        $transaction = Transaction::find($id);
        $transaction->update($request->all());
        if ($transaction->save()) {
            return redirect('/transactions')->with([
                'message' => 'Transaction modifiée avec succès',
                'success' => true
            ]);
        } else {
            return back()->with([
                'message' => 'Erreur lors de la modification de la transaction... Veuillez recommencer',
                'success' => false
            ]);
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $res = Transaction::find($id)->delete();
        if($res){
            return redirect('/transactions')->with([
                'message' => 'Transaction supprimée avec succès',
                'success' => true
            ]);
        }else{
            return back()->with([
                'message' => 'Erreur lors de la suppression de la transaction... Veuillez recommencer',
                'success' => false
            ]);
        }
    }
}
