<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games Hub -@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-screen bg-gradient-to-t from-blue-400 to-blue-900">

    @yield('conteudo')

    <footer
        class="fixed bottom-0 left-0 z-20 w-full flex sm:flex-row py-2 dark:bg-gray-800 dark:border-gray-600 bg-blue-500">

        <div class="w-full sm:w-3/12 flex flex-col items-center border-r border-slate-700">
            <span class="text-xs font-bold text-white">Nossas Redes</span>

            <div class="flex mt-2 sm:mt-4 md:items-center space-x-1.5 sm:space-x-4">
                <img class="rounded-full w-6 h-6" src="{{ asset('img/instagram.png') }}" alt="Instagram">
                <img class="rounded-full w-6 h-6" src="{{ asset('img/facebook.png') }}" alt="Facebook">
                <img class="rounded-full w-6 h-6" src="{{ asset('img/youtube.png') }}" alt="Youtube">
                <img class="rounded-full w-6 h-6" src="{{ asset('img/linkedin.png') }}" alt="Linkedin">
            </div>
        </div>

        <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
            <span class="text-xs font-bold text-white">Sobre Nós</span>
        </div>

        <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
            <span class="text-xs font-bold text-white">Inf. Legais</span>
        </div>

        <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
            <span class="text-xs font-bold text-white">contato</span>
        </div>

        <div class="w-full sm:w-3/12 flex justify-center">
            <span class="text-xs font-bold text-white">Criadores</span>
        </div>
    </footer>
</body>

</html>