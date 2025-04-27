<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/agriculture/img3.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-info {
            background-color: #17a2b8;
            color: white;
        }
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .alert {
            padding: 10px;
            background-color: #28a745;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions .btn {
            padding: 8px 16px;
        }
        .search-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des Produits</h2>
    
    <!-- Rechercher un produit -->
    <div class="search-container">
        <form action="{{ route('produits.index') }}" method="GET">
            <input type="text" name="search" placeholder="Rechercher un produit" value="{{ request()->get('search') }}">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>

    <!-- Ajouter un produit et alert success -->
    <div class="button-container">
        <a href="{{ route('produits.create') }}" class="btn btn-primary">Ajouter un Produit</a>
    </div>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <!-- Liste des produits -->
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité Récoltée</th>
                <th>Date Récolte</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->quantiteRecolte }}</td>
                    <td>{{ $produit->dateRecolte }}</td>
                    <td>{{ $produit->statut }}</td>
                    <td class="actions">
                        <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>
