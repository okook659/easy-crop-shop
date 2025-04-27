<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // Afficher la liste des produits avec recherche
    public function index(Request $request)
    {
        $search = $request->get('search');
        $produits = Produit::where('nom', 'like', "%$search%")->get();
        return view('produits.index', compact('produits'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('produits.create');
    }

    // Enregistrer un nouveau produit
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'quantiteRecolte' => 'required|integer',
            'dateRecolte' => 'required|date',
            'statut' => 'required'
        ]);

        Produit::create($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès');
    }

    // Afficher un produit spécifique
    public function show($id)
    {
        // Récupérer le produit à partir de la base de données
        $produit = Produit::findOrFail($id);
    
        // Retourner la vue avec les données du produit
        return view('produits.show', compact('produit'));
    }

    // Afficher le formulaire de modification
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

    // Mettre à jour un produit
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'quantiteRecolte' => 'required|integer',
            'dateRecolte' => 'required|date',
            'statut' => 'required'
        ]);

        $produit = Produit::findOrFail($id);
        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
    }

    // Supprimer un produit
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
