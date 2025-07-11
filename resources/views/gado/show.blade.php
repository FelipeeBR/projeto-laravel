@extends('layouts.app')

@section('title', 'Gados')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Informações do Gado {{ $gado->codigo }}</h3>
        </div>
        <div>
            <p>Código: {{ $gado->codigo }}</p>
            <p>Produção de leite: {{ $gado->leite }}</p>
            <p>Consumo de ração: {{ $gado->racao }}</p>
            <p>Peso: {{ $gado->peso }}</p>
            <p>Data de nascimento: {{ $gado->data_nascimento }}</p>
        </div>
    </div>
@endsection