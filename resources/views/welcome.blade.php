<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/welcome.css') }}>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Bienvenue</title>
</head>
<body>
    <div id="navbar" class="py-2 bg-gray-800 text-gray-200 px-2">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="50" width="50"><path d="M96 64c0-35.3 28.7-64 64-64L266.3 0c26.2 0 49.7 15.9 59.4 40.2L373.7 160 480 160l0-33.8c0-24.8 5.8-49.3 16.9-71.6l2.5-5c7.9-15.8 27.1-22.2 42.9-14.3s22.2 27.1 14.3 42.9l-2.5 5c-6.7 13.3-10.1 28-10.1 42.9l0 33.8 56 0c22.1 0 40 17.9 40 40l0 45.4c0 16.5-8.5 31.9-22.6 40.7l-43.3 27.1c-14.2-5.9-29.8-9.2-46.1-9.2c-39.3 0-74.1 18.9-96 48l-80 0c0 17.7-14.3 32-32 32l-8.2 0c-1.7 4.8-3.7 9.5-5.8 14.1l5.8 5.8c12.5 12.5 12.5 32.8 0 45.3l-22.6 22.6c-12.5 12.5-32.8 12.5-45.3 0l-5.8-5.8c-4.6 2.2-9.3 4.1-14.1 5.8l0 8.2c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-8.2c-4.8-1.7-9.5-3.7-14.1-5.8l-5.8 5.8c-12.5 12.5-32.8 12.5-45.3 0L40.2 449.1c-12.5-12.5-12.5-32.8 0-45.3l5.8-5.8c-2.2-4.6-4.1-9.3-5.8-14.1L32 384c-17.7 0-32-14.3-32-32l0-32c0-17.7 14.3-32 32-32l8.2 0c1.7-4.8 3.7-9.5 5.8-14.1l-5.8-5.8c-12.5-12.5-12.5-32.8 0-45.3l22.6-22.6c9-9 21.9-11.5 33.1-7.6l0-.6 0-32 0-96zm170.3 0L160 64l0 96 32 0 112.7 0L266.3 64zM176 256a80 80 0 1 0 0 160 80 80 0 1 0 0-160zM528 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0 64c-48.6 0-88-39.4-88-88c0-29.8 14.8-56.1 37.4-72c14.3-10.1 31.8-16 50.6-16c2.7 0 5.3 .1 7.9 .3c44.9 4 80.1 41.7 80.1 87.7c0 48.6-39.4 88-88 88z"fill="#fff" /></svg>
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
                <img class="w-full" src="{{ asset('images/image4.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Gestion des produits</div>
                  <p class="text-gray-700 text-base">
                    Nous gérons vos stocks tout en gardant une trace de toutes les transactions effectuées au sein de votre grenier
                    Nom du site </p>
                </div>
               
              </div>

              <div class="max-w-sm overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/graph.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Analyse et Graphes</div>
                  <p class="text-gray-700 text-base">
                    Nous gérons vos stocks tout en gardant une trace de toutes les transactions effectuées au sein de votre grenier
                  </p>
                </div>
               
              </div>
        </div>
    </div>
    <footer class="bg-gray-800 text-gray-200 py-8 mt-8">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="mb-4 md:mb-0">
            <h2 class="text-xl font-semibold">Easy Crop Shop</h2>
            <p class="text-sm text-gray-400">© {{ date('Y') }} Tous droits réservés.</p>
          </div>
          <div class="flex space-x-6">
            <a href="#" class="hover:text-white transition">Accueil</a>
            <a href="#" class="hover:text-white transition">À propos</a>
          </div>
        </div>
      </div>
    </footer>
    
</body>
</html>
