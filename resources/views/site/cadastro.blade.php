@extends('site.layouts.basico')

@section('titulo', 'Cadastro')
@section('conteudo')

    @include('site._partials.topo')

    <main class="w-full h-full flex items-center justify-center">
        <div class="w-full sm:w-4/12 h-full sm:h-5/6 flex items-center justify-center border border-slate-800 rounded-xl">
            <form class="w-full flex flex-col items-center" method="POST" action="{{ route('site.cadastro') }}">
                @csrf
                <div class="sm:-mt-4 mb-10">
                    <img class="w-32 sm:w-40" src="{{ asset('img/logo_nova.png') }}" alt="">
                </div>

                <div class="w-10/12 mt-4 sm:mt-10">
                    <input id="name" class="input-form w-full" type="text" name="name"
                        value="{{ old('nome') }}" autofocus="" placeholder="Nome">
                    @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>


                <div class="w-10/12 mt-4 sm:mt-10">
                    <input id="email" class="input-form w-full" type="text" name="email"
                        value="{{ old('email') }}" placeholder="email">
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="w-10/12 mt-4 sm:mt-10">

                    <input id="password" class="input-form w-full" type="password" name="password" placeholder="Senha"
                        required="" autocomplete="new-password">
                    @if ($errors->has('password'))
                        <div class="alert alert-danger">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="w-10/12 mt-4 sm:mt-10">
                    <input id="password_confirmation" class="input-form w-full" type="password" name="password_confirmation"
                        placeholder="Digite a senha novamente" required="" autocomplete="new-password">

                </div>

                <div class="w-10/12 flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('site.login') }}">
                        Já é cadastrado?
                    </a>

                    <button
                        class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                        Cadastrar
                    </button>
                </div>
                <div class="w-10/12 flex items-center justify-between mt-4">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="alert alert-danger">
                    {{ !empty($erro) ? $erro : '' }}
                </div>
            </form>
        </div>
        </div>
    </main>

@endsection
<?
