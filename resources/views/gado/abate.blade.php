@extends('layouts.app')

@section('title', 'Relatório de Abate')

@section('content')
    <div>
        <div>
            <h3>Relatório de Abate</h3>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Produção de leite</th>
                        <th>Consumo de ração</th>
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
                                <form action={{ route('gado.updateAbate', $gado->id) }} method="POST" onsubmit="return confirm('Tem certeza que deseja mandar para abate?');">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Mandar para abate</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection