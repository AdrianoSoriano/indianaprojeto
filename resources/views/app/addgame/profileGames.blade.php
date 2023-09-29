@extends('app.layouts._partials.basico')

@section('titulo', 'Meus Jogos')
@section('conteudo')

    @include('app.layouts._partials.topo')

    <main class="w-full flex flex-col items-center justify-center pb-20 sm:mb-20">
        <div class="w-full sm:w-10/12 h-full flex flex-wrap justify-start">
            <div class="w-full sm:w-1/2 lg:w-1/3 p-6">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Título</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Descrição</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Play Link</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Tags</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">YouTube</th>
                            <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @if(isset($addgame) && $addgame->count() > 0)
                        @foreach ($addgame as $games)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$games->title}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $games->description }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $games->play_link }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $games->tags }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $games->youtube }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="#">Excluir</a>
                                    <a href="#">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Nenhum jogo encontrado.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection
