@extends('layouts.app')

@section('content')

    <div class="welcome">
        <div class="container ">
            {{--se logado--}}
            <div class="row">
                <div class="inner-welcome">

                    @if (Auth::guest())
                        <h1>Bem vindo!</h1>
                        <h4>Para efetuar pedidos efetue o login ou crie uma conta</h4>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Iniciar Sessão</a>
                            <a class="btn btn-default btn-lg" href="{{route('register')}}" role="button">Registar</a>
                        </div>
                    @else

                        <h1>Bem vindo, <strong>{{Auth::user()->name}} </strong>!</h1>
                        <h4>Para iniciar o seu pedido carregue no botão abaixo</h4>
                        <p><a class="btn btn-primary btn-lg" href="{{route('request')}}" role="button">Inciar Pedido</a></p>


                    @endif
                </div>

            </div>

            {{--senao--}}
        </div>
    </div>
    @include('estatisticas')
@endsection
