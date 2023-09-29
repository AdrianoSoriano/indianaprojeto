@extends('app.layouts._partials.basico')

@section('titulo', 'Home')
@section('conteudo')

    @include('app.layouts._partials.topo')

    <main class="w-full flex flex-col items-center justify-center pb-20 sm:mb-20">          
        <div class="w-full sm:w-10/12 h-full flex flex-wrap items-center justify-start">
            @if(@isset($addgames) && count($addgames) > 0)  
                @foreach ($addgames as $game)
                 <div class="w-5/12 sm:w-[15%] h-2/6 flex flex-col items-center ml-6 sm:ml-20 mb-8 sm:mb-20 hover:scale-125 transition-all duration-500">
                        <a href="">
                            <img class="w-40 h-48" src="{{asset($game->image)}}" alt="{{$game->title}}">
            
                            <div class="w-8/12 flex flex-col mt-4 space-y-4">
                                <span class="label-input text-xs">
                                    {{$game->title}}
                                </span>
                                <span class="label-input text-xs">
                                    {{$game->tags}}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </main>

@endsection