@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-center gap-3 mt-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Leite</h5>
                <p class="card-text text-center">Total de leite produzido por semana</p>
                <h3 class="text-center">{{ $totalLeite }} Litros</h3>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Ração</h5>
                <p class="card-text text-center">Total de ração consumida por semana</p>
                <h3 class="text-center">{{ $totalRacao }} kgs</h3>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Quantidade</h5>
                <p class="card-text text-center">Animais até 1 ano e 500Kg+ de ração por semana</p>
                <h3 class="text-center">{{ count($totalIdadeAndConsumo) }}</h3>
                <a href="" class="btn btn-primary">Relatório</a>
            </div>
        </div>
    </div>
@endsection