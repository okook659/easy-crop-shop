<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->get('search');
        $produits = Produit::where('nom', 'like', "%$search%")->get();
        return view('produits.index', compact('produits'));
    }

    
    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'quantiteRecolte' => 'required|integer|min:0',
            'dateRecolte' => 'required|date',
            'statut' => 'required|string|max:50'
        ]);
    
        Produit::create($validated);
    
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès');
    }
    

    public function show($id)
    {
        $produit = Produit::findOrFail($id);
    
        return view('produits.show', compact('produit'));
    }


    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

 
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

 
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
