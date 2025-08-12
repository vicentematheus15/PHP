@extends('layouts.app')

@section('content')
    <a href="{{ route('products.create') }}">+ Novo Produto</a>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top:10px; width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>R$ {{ number_format($p->price, 2, ',', '.') }}</td>
                    <td>{{ Str::limit($p->description, 60) }}</td>
                    <td>
                        <a href="{{ route('products.show', $p) }}">Ver</a> |
                        <a href="{{ route('products.edit', $p) }}">Editar</a> |
                        <form action="{{ route('products.destroy', $p) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Confirma exclusão?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Nenhum produto encontrado.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
