<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-sm text-gray-900 text bg-gray-background">
  <header class="flex items-center justify-between px-8 py-4">
    <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center">
      @if (Route::has('login'))
        <div class="px-6 py-4">
          @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                                                                                this.closest('form').submit();">
                {{ __('Log Out') }}
              </a>
            </form>
          @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Se connecter</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">S'enregistrer</a>
            @endif
          @endauth
        </div>
      @endif
      <a href="#">
        <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="avatar" class="w-10 h-10 rounded-full ">
      </a>
    </div>

  </header>
  <main class="container flex mx-auto max-w-custom">
    <div class="mr-5 w-70">
      <div class="mt-16 bg-white border-2 border-blue rounded-xl">
        <div class="px-6 py-2 pt-6 text-center ">
          <h3 class="text-base font-semibold">Ajouter une idée</h3>
          <p class="mt-4 text-xs">Nous vous ecoutons !</p>
          <form action="#" method="post" class="px-4 py-6 space-y-4 ">
            <div>
              <input type="text" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Votre idée">
            </div>
            <div>
              <select name="category_add" id="category_add" class="w-full px-4 py-2 bg-gray-100 border-none rounded-xl">
                <option value="Category 1">Categorie 1</option>
                <option value="Category 2">Categorie 2</option>
                <option value="Category 3">Categorie 3</option>
                <option value="Category 4">Categorie 4</option>
              </select>
            </div>
            <div>
              <textarea name="idea" id="idea" cols="30" rows="4" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 rounded-xl" placeholder="Description"></textarea>
            </div>
            <div class="flex items-center justify-between space-x-3">
              <button type="button" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                </svg>
                <span class="ml-2">Pièce jointe</span>
              </button>
              <button type="submit" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                <span class="ml-2">Transmettre</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="w-175">
      <nav class="flex items-center justify-between text-xs">
        <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
          <li><a href="#" class="pb-3 border-b-4 border-blue">Toutes les idées(87)</a></li>
          <li><a href="#" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
              examiné(7)
            </a>
          </li>
          <li><a href="#" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
              En Traitement(1)
            </a>
          </li>
        </ul>
        <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
          <li><a href="#" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
              Implementé(10)
            </a>
          </li>
          <li><a href="#" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">
              Cloturé(54)
            </a>
          </li>
        </ul>
      </nav>
      <div class="mt-8">
        {{ $slot }}
      </div>


    </div>
  </main>
</body>

</html>
