@extends('layouts.app')

@section('content')
    <h2>{{ $product->name }}</h2>
    <p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
    <p><strong>Descrição:</strong><br>{{ $product->description }}</p>

    <p>
        <a href="{{ route('products.edit', $product) }}">Editar</a> |
        <a href="{{ route('products.index') }}">Voltar</a>
    </p>
@endsection
