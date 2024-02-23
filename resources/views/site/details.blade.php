@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <img src="{{ $produto->imagem }}" class="resposive-img">
    </div>

    <div class="col s12 m6">
        <h4> {{ $produto->nome}} </h4>
        <h4> R$ {{ number_format($produto->preco, 2, ',', '.')}} </h4>
        <p> {{ $produto->descricao}} </p>
        <p> Postado por: {{ $produto->user->first_name}} <br>
            Categoria: {{ $produto->categoria->nome}} <br>
        </p>
        <form action="{{ route('site.addcarrinho')}}" method="POST" enctype="multipart/form-data"
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="hidden" name="name" value="{{ $produto->nome }}">
            <input type="hidden" name="price" value="{{ $produto->preco }}">
            <input type="number" name="qnt" value="1">
            <input type="hidden" name="image" value="{{ $produto->imagem }}">
            
        <button class="btn orange btn-large"> Comprar </button>
        </form>
    </div>
</div>

@endsection