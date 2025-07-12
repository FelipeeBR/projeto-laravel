@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div>
        <p>Olá {{ Auth::user()->name }}</p>   
        <p>Total de leite produzido por semana: {{ $totalLeite }}</p>
        <p>Total de ração consumida por semana: {{ $totalRacao }}</p>

        <div>
            <p>quantidade total de animais até 1 ano de idade e 500Kg de ração por semana: {{ count($totalIdadeAndConsumo) }}</p>
            @foreach ($totalIdadeAndConsumo as $gado)
                <p>
                    Idade: 
                    @php
                        $idadeMeses = \Carbon\Carbon::parse($gado->data_nascimento)->diffInMonths();
                    @endphp
                    {{ floor($idadeMeses) }} meses
                </p>
                <p>Consumo: {{ $gado->racao }}</p>
            @endforeach
        </div>
    </div>
@endsection