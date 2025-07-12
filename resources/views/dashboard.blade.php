@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div>
        <p>Olá {{ Auth::user()->name }}</p>   
        <p>Total de leite produzido por semana: {{ $totalLeite }}</p>
        <p>Total de ração consumida por semana: {{ $totalRacao }}</p>
    </div>
@endsection