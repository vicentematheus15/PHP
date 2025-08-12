@extends('layouts.app')

@section('content')
    <h2>Editar Produto</h2>

    @if ($errors->any())
        <div style="background:#f8d7da;padding:10px;margin-bottom:10px;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nome</label><br>
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div>
            <label>Preço</label><br>
            <input type="text" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <div>
            <label>Descrição</label><br>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
    </form>

    <p><a href="{{ route('products.index') }}">Voltar</a></p>
@endsection
