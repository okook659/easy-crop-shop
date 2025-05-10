<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/agriculture/img4.jpg') no-repeat center center fixed; /* Correctif du chemin */
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
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
        td {
            background-color: #fafafa;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Voir le Produit</h2>

    <table>
        <tr>
            <th>Nom</th>
            <td>{{ $produit->nom }}</td>
        </tr>
        <tr>
            <th>Quantité Récoltée</th>
            <td>{{ $produit->quantiteRecolte }}</td>
        </tr>
        <tr>
            <th>Date Récolte</th>
            <td>{{ $produit->dateRecolte }}</td>
        </tr>
        <tr>
            <th>Statut</th>
            <td>{{ $produit->statut }}</td>
        </tr>
    </table>

    <div class="button-container">
        <a href="{{ route('produits.index') }}" class="btn btn-primary">Retour à la Liste</a>
        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
    </div>
</div>
@endsection

</body>
</html>
