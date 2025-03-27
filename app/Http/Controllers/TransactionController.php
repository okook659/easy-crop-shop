<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Produit;
use Illuminate\Support\Facades\View;

class TransactionController extends Controller
{
    protected $updating = false; 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $updating = $this->updating;
        $produits = Produit::all();
        return view('transaction.form', compact('updating', 'produits'));
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
            'acheteur'=>'required|string',
            'produit'=>'required|int'
        ]);
        $transaction = Transaction::create($request->all());
        if($transaction->save()){
            return redirect('/transactions')->with('message', 'Transaction créée avec succès');
        }else{
            return back()->with('message', 'Erreur lors de la création de la transaction, Veuillez recommencer');
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
        $transaction = Transaction::find($id);
        return view('transaction.form', compact('updating','transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
