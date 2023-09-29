<header class="w-full bg-gradient-to-t from-cyan-500 to-blue-500 py-2">
    <div class="w-full flex items-center mx-outo px-6">
            <div class="w-4/12 sm:w-2/12 h-full flex items-center justify-center pl-2">
                <a href="{{ route('app.home')}}"><img class="w-32" src="{{ asset('img/logo_nova.png') }}"
                        alt="Logo"></a>
            </div>
            <div class="w-4/12"></div>
            <div class="w-full h-full flex items-center justify-end me-4">
                <a href="{{route('app.addgames')}}" class="font-semibold text-gray-300 hover:text-gray-900">Cadastrar Jogo</a>
                <a href="{{route('app.profilegames')}}" class="ml-4 font-semibold text-gray-300 hover:text-gray-900">Meus Jogos</a>
                <a href="{{route('app.profile')}}" class="ml-4 font-semibold text-gray-300 hover:text-gray-900">Perfil</a>
                <a href="{{route('app.sair')}}" class="ml-4 font-semibold text-gray-300 hover:text-gray-900">Sair</a>
        </div>
    </div>
</header>