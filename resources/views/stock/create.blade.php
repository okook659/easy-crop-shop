<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <!-- stock/create.blade.php -->


    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_produit">Produit</label>
            <select name="nom_produit" id="nom_produit" class="form-control">
                <option value="1">Exemple</option>
            </select>
        </div>

        <div class="form-group">
            <label for="quantite_ajoutee">Quantité à ajouter</label>
            <input type="number" name="quantite_ajoutee" id="quantite_ajoutee" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter au stock</button>
    </form>

</body>
</html>