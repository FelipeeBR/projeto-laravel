@extends('layouts.app')

@section('title', 'Gerenciar Gados')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container mt-3">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Gerenciamento de Gados
                </h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Data de nascimento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gados as $gado)
                            <tr>
                                <td>{{ $gado->codigo }}</td>
                                <td>{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</td>
                                <td>
                                    <div class="d-flex flex-row gap-2">
                                        <a href="{{ route('gado.show', $gado->codigo) }}" 
                                            class="btn btn-primary">
                                            Visualizar
                                        </a>   
                                        <a href="{{ route('gado.edit', $gado->id) }}" 
                                            class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('gado.destroy', $gado->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Deletar
                                            </button>
                                        </form>
                                    </div>
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