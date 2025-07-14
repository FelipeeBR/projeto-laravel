@extends('layouts.app')

@section('title', 'Relatório de Abate')

@section('content')
    <div class="container mt-3">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Relatório de Abate</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
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
                                <td>{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</td>
                                <td>
                                    <form action={{ route('gado.updateAbate', $gado->id) }} method="POST" onsubmit="return confirm('Tem certeza que deseja mandar para abate?');">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Mandar para abate</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <div class="float-right">
                    {{ $gados->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection