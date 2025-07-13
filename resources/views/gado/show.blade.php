@extends('layouts.app')

@section('title', 'Gados')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg border border-gray-100">
        <div class="flex items-center justify-center pb-6 border-b border-gray-200">
            <h3 class="font-bold text-2xl text-gray-800 text-center">
                <span class="text-blue-600">Gado:</span> {{ $gado->codigo }}
            </h3>
        </div>
        <div class="mt-6 space-y-4">
            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="font-medium text-gray-600">Código:</span>
                <span class="font-semibold text-gray-800">{{ $gado->codigo }}</span>
            </div>
            
            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="font-medium text-gray-600">Produção de leite:</span>
                <span class="font-semibold text-gray-800">{{ $gado->leite }} L/semana</span>
            </div>
            
            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="font-medium text-gray-600">Consumo de ração:</span>
                <span class="font-semibold text-gray-800">{{ $gado->racao }} kg/semana</span>
            </div>
            
            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="font-medium text-gray-600">Peso:</span>
                <span class="font-semibold text-gray-800">{{ $gado->peso }} kg</span>
            </div>
            
            <div class="flex justify-between items-center py-2">
                <span class="font-medium text-gray-600">Data de nascimento:</span>
                <span class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</span>
            </div>
        </div>
    </div>
@endsection