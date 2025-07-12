@extends('layouts.app')

@section('title', 'Lista de Gados Abatidos')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de Gados Abatidos</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Data de nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gados as $gado)
                    <tr>
                        <td>{{ $gado->codigo }}</td>
                        <td>{{ $gado->data_nascimento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection