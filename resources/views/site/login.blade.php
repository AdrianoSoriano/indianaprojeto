@extends('site.layouts.basico')

@section('titulo', 'Home')
@section('conteudo')

    @include('site._partials.topo')

    <main class="h-full flex items-center justify-center">
        <div class="w-full sm:w-4/12 h-full sm:h-5/6 flex items-center justify-center border border-slate-800 rounded-xl">
            <form class="w-full flex flex-col items-center" method="POST" action="{{ route('site.login') }}">
                @csrf
                <div class="sm:-mt-20 mb-10">
                    <img class="w-32 sm:w-40" src="{{ asset('img/logo_nova.png') }}" alt="">
                </div>
                
                <div class="w-10/12">
                        <input id="email" class="input-form w-full" type="text" name="usuario" value="{{old('usuario')}}" placeholder="E-mail">
                        @if($errors->has('usuario'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('usuario') }}
                                </div>
                        @endif
                </div>

                <div class="w-10/12 mt-10">
                            <input id="password" class="input-form w-full" type="password" name="senha" value="{{old('senha')}}" placeholder="Senha">
                            @if($errors->has('senha'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('senha') }}
                                </div>
                             @endif
                </div>

                <div class="block mt-10">

                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-900 hover:text-white">Lembrar-me</span>
                    </label>
                </div>

                <div class="w-10/12 flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-900 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="">
                        Esqueceu a senha?
                    </a>

                    <button
                    class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                    Log in
                    </button>
                </div>
                <div class="alert alert-danger">
                    {{ !empty($erro) ? $erro : '' }}
                </div>
            </form>
        </div>
    </main>
@endsection
