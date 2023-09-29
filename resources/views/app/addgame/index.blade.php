@extends('app.layouts._partials.basico')

@section('titulo', 'Cadastrar Jogo')
@section('conteudo')

    @include('app.layouts._partials.topo')

    <main class="w-full h-full justify-center">
        <div>
            <div class="w-full text-center py-20">
                <span class="label-input text-2xl">Cadastrar novo Jogo</span>
            </div>
        </div>

        <div class="w-full h-5/6 flex flex-col rounded-xl mt-2 overflow-auto">
            <form class="w-full flex flex-col items-center" action="{{route('app.addgames')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full h-5/6 flex flex-col sm:flex-row justify-center mt-10 sm:space-x-4 space-y-4 sm:space-y-0">
                    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-xl pb-4">
                        <h1 class="text-xl label-input">
                            Informações principais
                        </h1>
        
                        <input class="w-10/12 " type="text" name="title" id="title" placeholder="Título">
                        @if ($errors->has('title'))
                        <div class="alert alert-danger">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                        <input type="file" name="image" id="image" class="w-10/12 text-sm text-black-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-500 file:text-white
                        hover:file:bg-blue-600">
                        @if ($errors->has('image'))
                        <div class="alert alert-danger">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
        
                    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-xl pb-4">
                        <h1 class="text-xl label-input">
                            Descrição e detalhes
                        </h1>
        
                        <textarea class="w-10/12 rounded-xl" name="description" id="description" cols="30" rows="7" placeholder="Descrição do jogo"></textarea>
                        @if ($errors->has('description'))
                        <div class="alert alert-danger">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                        <input class="input-form w-10/12" type="text" name="play_link" id="play_link" placeholder="Link Oficial">
                        @if ($errors->has('play_link'))
                        <div class="alert alert-danger">
                            {{ $errors->first('play_link') }}
                        </div>
                        @endif
                    </div>
        
                    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-xl pb-4">
                        <h1 class="text-xl label-input">
                            Mídia Externa
                        </h1>
                        
                        <input class="w-10/12 input-form" type="text" name="tags" id="tags" placeholder="Tags">
                        @if ($errors->has('tags'))
                        <div class="alert alert-danger">
                            {{ $errors->first('tags') }}
                        </div>
                        @endif
                        <input class="w-10/12 input-form" type="text" name="video" id="video" placeholder="Link Youtube (somente o trecho após o sinal '=')">
                        @if ($errors->has('video'))
                        <div class="alert alert-danger">
                            {{ $errors->first('video') }}
                        </div>
                        @endif
                    </div>
                      
                </div>
        
                <button  class="inline-block  mt-14 sm:mt-8 rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                    Cadastrar Jogo
                </button>
                @if(session('success') or session('error'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
    </main>

@endsection
