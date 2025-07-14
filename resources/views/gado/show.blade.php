@extends('layouts.app')

@section('title', 'Gados')

@section('content')
    <div class="container mt-3">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    <span>{{ $gado->codigo }}</span>
                </h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted fw-medium">Código:</span>
                        <span class="fw-semibold text-dark">{{ $gado->codigo }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted fw-medium">Produção de leite:</span>
                        <span class="fw-semibold text-dark">{{ $gado->leite }} L/semana</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted fw-medium">Consumo de ração:</span>
                        <span class="fw-semibold text-dark">{{ $gado->racao }} kg/semana</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted fw-medium">Peso:</span>
                        <span class="fw-semibold text-dark">{{ $gado->peso }} kg</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted fw-medium">Data de nascimento:</span>
                        <span class="fw-semibold text-dark">{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection