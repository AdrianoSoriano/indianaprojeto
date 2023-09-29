@extends('app.layouts._partials.basico')

@section('titulo', 'Perfil')
@section('conteudo')

    @include('app.layouts._partials.topo')

    <main class="w-full h-full justify-center py-12">
                <div class="w-full flex items-center justify-center sm:flex-row mx-auto sm:px-6 lg:px-8">
                    <div class="w-full items-center justify-center sm:w-6/12">
                        <div class="w-10/12 items-center">
                                <header class="text-center">
                                    <h2 class="label-input text-lg">
                                        Informações do Perfil
                                    </h2>

                                    <p class="label-input text-sm">
                                        Atualize seu nome de usuário ou email da conta
                                    </p>
                                </header>

                                <form method="post" action="{{route('app.profile')}}"class="mt-6 space-y-6">
                                    @csrf
                                    <div>
                                        <input id="name" name="name" type="text" class="w-full"
                                                value="{{$user->name ?? old('nome')}}" autofocus=""
                                                autocomplete="name" placeholder="Nome">
                                    </div>

                                    <div>
                                        <input id="email" name="email" type="email" class="w-full"
                                                value="{{$user->email ?? old('email')}}"
                                                autocomplete="username" placeholder="E-mail">
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-4 justify-center">
                                        <button  class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                                            Atualizar</button>
                                    </div>
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </form>
                        </div>
                    </div>
                    
                </div>

    </main>

@endsection
