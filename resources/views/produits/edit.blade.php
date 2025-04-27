<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/agriculture/img2.png') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            margin-top: 10px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le Produit</h2>
    <form action="{{ route('produits.update', $produit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{ $produit->nom }}" required>
        </div>
        <div class="form-group">
            <label for="quantiteRecolte">Quantité Récoltée</label>
            <input type="number" id="quantiteRecolte" name="quantiteRecolte" class="form-control" value="{{ $produit->quantiteRecolte }}" required>
        </div>
        <div class="form-group">
            <label for="dateRecolte">Date de Récolte</label>
            <input type="date" id="dateRecolte" name="dateRecolte" class="form-control" value="{{ $produit->dateRecolte }}" required>
        </div>
        <div class="form-group">
            <label for="statut">Statut</label>
            <input type="text" id="statut" name="statut" class="form-control" value="{{ $produit->statut }}" required>
        </div>
        <button type="submit" class="btn">Mettre à Jour</button>
    </form>
</div>
@endsection

</body>
</html>
