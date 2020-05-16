@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Exibindo os produtos</h1>

    <a href="{{ route('products.create') }}">Cadastrar</a>

    <hr>
    @component('admin.components.card')
        @slot('title')
            <h1>Título do Card</h1>
        @endslot
        <h2>Um card de exemplo!</h2>
    @endcomponent

    <hr>

    @include('admin.includes.alert', ['content' => 'Esse é meu array de alert.'])

    <hr>

    @if (isset($products))
        @foreach ($products as $key=>$product)
            <p class="@if($loop->last) last @endif">{{$key}}-{{$product}}</p>
        @endforeach
    @endif

    <hr>

    @forelse ($products as $key=>$product)
     <p class="@if($loop->first) last @endif">{{$key}}-{{$product}}</p>
    @empty
        <p>Não existe produtos cadastrados</p>
    @endforelse

    <hr>

    @if ($teste === '123')
        É igual
    @elseif ($teste === 123)
        É igual a 123
    @else
        É diferênte
    @endif

    <!-- Retorna falso -->
    @unless ($teste === '123')
        <br>É falso, hahhahaha
    @else
        <br>Entrou no else!
    @endunless

    <!-- Vê se a variável existe -->
    @isset($teste)
        <br>A variável, existe sim {{$teste}}!
    @else
        <br>Existe não!
    @endisset

    <!-- Variável vazia -->
    @empty($teste3)
        A variável está vazia.
    @else
        <br>Teste é {{ $teste3[1] }}
    @endempty

    <!-- Autenticação, só entre se estiver autenticada -->
    @auth
        <p>Autenticado</p>
    @else
        <p>Não está Autenticado</p>
    @endauth

    <!-- Entra se não estiver autenticado -->
    @guest
        <p>Guest - Não está autenticado</p>
    @endguest

    <!-- Switch -->
    @switch($teste)
        @case(1)
            É igual a 1.
            @break
        @case(2)
            É igual a 2.
            @break
        @case(123)
            É igual a 123.
            @break
        @default
            Valor não encontrado!
    @endswitch

<!-- Fim da Section -->
@endsection


@push('styles')
    <style>
        .last {background-color: greenyellow; padding: 8px;border-radius: 5px;}
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.backgroundColor = '#edeff9'
    </script>
@endpush
