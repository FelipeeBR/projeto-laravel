@extends('layouts.app')

@section('title', 'Gados')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de Gados</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Quantidade de leite (semanal)</th>
                    <th>Quantidade de ração (semanal)</th>
                    <th>Peso</th>
                    <th>Data de nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gados as $gado)
                    <tr>
                        <td>{{ $gado->codigo }}</td>
                        <td>{{ $gado->leite }}</td>
                        <td>{{ $gado->racao }}</td>
                        <td>{{ $gado->peso }}</td>
                        <td>{{ $gado->data_nascimento }}</td>
                        <td>
                            <form action={{ route('gado.destroy', $gado->id) }} method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection