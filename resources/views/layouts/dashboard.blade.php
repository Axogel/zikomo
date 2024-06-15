<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <style>
        .custom-background {
            background-image: url("{{ asset('images/zikomo-logo.png') }}");
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white ">
    <div class="flex flex-col md:flex-row h-screen">
        <nav id="sidebar" class="hidden md:w-64 h-screen flex flex-col bg-zinc-600 border-r border-zinc-900">
            <div class="flex flex-col items-center py-4 text-white">
                <img src="{{ asset('images/zikomo-logo.png') }}" alt="Admin Avatar" class="w-16 h-16 rounded-full">
                <h2 class="mt-2 text-lg font-semibold text-white">ZiKomo</h2>
            </div>
            <ul class="mt-4 flex-1">
                <li><a href="{{ url('inicio') }}"
                        class="block py-2.5 px-4 rounded text-white transition duration-200 hover:bg-orange-400 hover:text-white">Inicio</a>
                </li>
                <li><a href="{{ url('users') }}"
                        class="block py-2.5 px-4 rounded text-white transition duration-200 hover:bg-orange-400 hover:text-white">Usuarios</a>
                </li>
                @if (auth()->user()->hasAnyRole(['admin', 'mesonero']))
                    <li>
                        <a href="#"
                            class="block py-2.5 px-4 rounded text-white transition duration-200 hover:bg-orange-400 hover:text-white">
                            Administración
                        </a>
                    </li>
                @endif
                <li><a href="#"
                        class="block py-2.5 px-4 rounded text-white transition duration-200 hover:bg-orange-400 hover:text-white">Promociones</a>
                </li>
            </ul>
            <div class="flex flex-col items-center py-4 text-white">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </nav>



        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col custom-background bg-cover bg-center bg-no-repeat">
            <!-- Barra superior -->
            <header class="bg-zinc-600 shadow px-4 py-4 flex justify-between items-center">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <div class="flex relative">
                    <button id="notification-menu-toggle" class="text-white focus:outline-none mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405C18.195 14.905 18 14.62 18 14V11c0-3.07-1.63-5.64-4.5-6.32V4a1.5 1.5 0 00-3 0v.68C7.63 5.36 6 7.92 6 11v3c0 .62-.195.905-.595 1.595L4 17h5m6 0a3 3 0 11-6 0h6z">
                            </path>
                        </svg>
                    </button>
                    <div id="notification-menu"
                        class="hidden absolute right-0 mt-10 w-64 bg-zinc-600 border border-zinc-800 hover:bg-orange-400 rounded-lg shadow-lg">
                        <div class="p-4 text-white">No new notifications</div>
                    </div>
                    <button id="profile-menu-toggle" class="text-white   focus:outline-none flex items-center">
                        <img src="{{ asset('images/admin-avatar.png') }}" alt="Admin Avatar"
                            class="w-8 h-8 rounded-full">
                    </button>
                    <div id="profile-menu"
                        class="hidden absolute right-0 mt-10 w-48 bg-zinc-600 border border-zinc-800 rounded-lg shadow-lg">
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-white hover:bg-orange-400 rounded-lg">Profile</a>




                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#" class="block px-4 py-2 text-white hover:bg-orange-400 rounded-lg"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>


                    </div>
                </div>
            </header>
            <!-- Contenido de la página -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
    @yield('scripts')
</body>

</html>
