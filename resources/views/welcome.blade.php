<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login & Register</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased bg-cover bg-center bg-no-repeat" style="background-image: url('https://steamuserimages-a.akamaihd.net/ugc/920291799814479551/9996ADDF37EBCB2DDB1E019C443DA24108610888/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false');">
        <div class="min-h-screen flex flex-col items-center justify-center bg-black/50 p-6">
            <div class="w-full max-w-md bg-white/90 backdrop-blur-md rounded-lg shadow-lg p-8 text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Welcome</h2>
                @if (Route::has('login'))
                    <nav class="flex flex-col space-y-6">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="w-full px-6 py-3 text-lg font-bold text-white bg-red-500 rounded-md shadow-md hover:bg-red-600 transition duration-300">
                                Halaman Utama
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="w-full px-6 py-3 text-lg font-bold text-white bg-red-500 rounded-md shadow-md hover:bg-red-600 transition duration-300">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-full px-6 py-3 text-lg font-bold text-red-500 border-2 border-red-500 rounded-md shadow-md hover:bg-red-500 hover:text-white transition duration-300">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </body>
</html>
