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
    @livewireStyles
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-sm text-gray-900 text bg-gray-background">
    <header class="flex flex-col items-center justify-between px-8 py-4 md:flex-row ">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline md:text-lg">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="avatar" class="w-10 h-10 rounded-full ">
            </a>
        </div>

    </header>
    <main class="container flex flex-col mx-auto max-w-custom md:flex-row">
        <div class="mx-auto md:mx-0 md:mr-5 w-70">
            <div class="mt-16 bg-white border-2 md:sticky top-8 border-blue rounded-xl">
                <div class="px-6 py-2 pt-6 text-center ">
                    <h3 class="text-base font-semibold">Ajouter une idée</h3>
                    <p class="mt-4 text-xs">
                        @auth
                            Nous vous ecoutons !
                        @else
                            Veuillez-vous connecter pour creer une idée .

                        @endauth
                    </p>
                    @auth
                        <livewire:create-idea />
                        @else
                            <div class="my-6 text-center">
                                <a href="{{ route('login') }}" class="justify-center inline-block w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                                    <span class="">Connexion</span>
                                </a>
                                <a href="{{route('register')}}" class="justify-center inline-block w-1/2 px-6 py-3 mt-4 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 mt h-11 rounded-xl hover:border-gray-400">
                                    <span class="">Inscription</span>
                                </a>
                            </div>
                        @endauth

                </div>
            </div>
        </div>

        <div class="w-full px-2 md:px-0 md:w-175">
            <nav class="items-center justify-between hidden text-xs md:flex ">
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
    @livewireScripts
</body>

</html>
