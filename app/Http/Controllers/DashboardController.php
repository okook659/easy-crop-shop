<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $labels = ['Distribution', 'Vente'];
        $labelsPie = ['Vendu', 'Stocké', 'Distribué'];
        $data = [120, 150, 180, 90];

        $totalClients = Client::count();
        $totalProduits = Produit::count();
        $totalTransactions = Transaction::count();
        $totalDistributions = Transaction::where('typeTransaction', 'distribution')->count();
        $totalVentes = Transaction::where('typeTransaction', 'vente')->count();
        $totalProduitStock = Produit::where('statut', 'stocke')->count();
        $totalProduitVendu = Produit::where('statut', 'vendu')->count();
        $totalProduitDistribue = Produit::where('statut', 'distribue')->count();
        

        return view('dashboard', [
            'labels' => $labels,
            'labelsPie' =>$labelsPie,
            'data' => $data,
            'totalClients' => $totalClients,
            'totalProduits' => $totalProduits,
            'totalTransactions' => $totalTransactions,
            'totalDistributions' => $totalDistributions,
            'totalVentes' => $totalVentes,
            'totalProduitStock' => $totalProduitStock,
            'totalProduitVendu' => $totalProduitVendu,
            'totalProduitDistribue' => $totalProduitDistribue,
        ]);
    }
}

