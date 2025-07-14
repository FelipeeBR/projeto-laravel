@extends('layouts.app')

@section('title', 'Relatório de Abatidos')

@section('content')
    <div class="container mt-3">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Relatório Abatidos</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Data de nascimento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gados as $gado)
                            <tr>
                                <td>{{ $gado->codigo }}</td>
                                <td>{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('gado.show', $gado->codigo) }}" 
                                        class="btn btn-primary">
                                        Visualizar
                                    </a>   
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