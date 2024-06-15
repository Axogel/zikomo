<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LogIn')</title>
    <style>
        .custom-background {
            background-image: url("{{ asset('images/zikomo-logo.png') }}");
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="custom-background bg-cover bg-center bg-no-repeat flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 shadow-orange-300 ">
        <h2 class="text-2xl font-bold text-center mb-4">Log In</h2>
        <form id="loginForm" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div>
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div>
                <button type="submit" class="w-full bg-orange-400 text-white py-2 rounded-lg hover:bg-orange-500">
                    Log In
                </button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Previene el comportamiento por defecto del formulario
            window.location.href = '/inicio'; // Redirige a la ruta /inicio
        });
    </script>
</body>

</html>
