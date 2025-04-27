<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Afficher tous les stocks
        $stocks = Stock::all();
        return view('stock.index', compact('stocks'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer tous les produits enregistrés
    //$products = Produit::all();
        
        // Retourner la vue avec les produits
        return view('stock.create'/*, compact('products')*/);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Récupérer le produit en fonction du nom
        $product = Produit::where('nom', $request->nom_produit)->first();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Produit introuvable.');
        }
    
        $collectedQuantity = $product->quantite_recoltee;
        $addedQuantity = $request->quantite_ajoutee;
    
        // Vérifier que la quantité ajoutée ne dépasse pas la quantité récoltée
        if ($addedQuantity > $collectedQuantity) {
            return redirect()->back()->with('error', 'La quantité ajoutée dépasse la quantité récoltée.');
        }
    
        // Vérifier si un stock existe déjà pour ce produit
        $stock = Stock::where('nom_stock', $product->nom)->first();
    
        if ($stock) {
            // Mise à jour du stock existant
            $newQuantity = $stock->quantite_stock + $addedQuantity;
            $stock->update(['quantite_stock' => $newQuantity]);
        } else {
            // Création d'un nouveau stock pour ce produit avec la quantité ajoutée
            Stock::create([
                'nom_stock' => $product->nom,  // Nom du produit
                'quantite_stock' => $addedQuantity,  // La quantité ajoutée
                'lieu_stock' => null,  // Lieu de stockage laissé vide pour l'admin
            ]);
        }
    
        return redirect()->route('stocks.create')->with('success', 'Stock mis à jour avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //On va afficher un stok precis avec toutes ces information
        $stock = Stock::find($id);
        return view('stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //On pourra choisir un stock à éditer
        $stock = Stock::find($id);
        return view('stocks.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //On pourra mettre à jour un stock (Surtout indiquer le lieu de stockage qu'on avait pas ajouter a la création vu que seul l'admin pouvait le faire)
        
        $stock = Stock::find($id);
        $stock->update($request->all());

        return redirect()->route('stocks.index')->with('success', 'Stock mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stock = Stock::find($id);
        $stock->delete();

        return redirect()->route('stocks.index')
            ->with('success', 'Stock supprimé avec succès');
    }
}
