<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/welcome.css') }}>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Welcome</title>
</head>
<body>
    <div id="navbar" class="py-2">
        <span class="text-black">ECS</span>
        <div id="links">
            <ul>
                <li><a class="" href="{{ route('login') }}">Connexion</a></li>
                <li><a class="" href="{{ route('register') }}">Inscription</a></li>
            </ul>
        </div>
    </div>
    <div id="header">

    </div>
    <div class="content">
        <h1>Ce que nous proposons</h1>
        <div class="cards">
            <div class="max-w-sm overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/image2.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Gestion des produits</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
               
              </div>

              <div class="max-w-sm overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/image3.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
               
              </div>
        </div>
    </div>
</body>
</html>
