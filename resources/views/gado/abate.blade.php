@extends('layouts.app')

@section('title', 'Relatório de Abate')

@section('content')
    <div class="flex items-center justify-center">
        <div class="p-4 w-full max-w-7xl">
            <div class="flex items-center justify-center pb-4">
                <h3 class="font-semibold text-xl text-gray-800 leading-tight text-center">Relatório de Abate</h3>
            </div>
            <div class="overflow-x-auto max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg border border-gray-100">
                <table class="w-full rounded-lg bg-white border border-gray-300 shadow-lg">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-4 py-3 sm:px-6">Código</th>
                            <th class="px-4 py-3 sm:px-6">Produção de leite</th>
                            <th class="px-4 py-3 sm:px-6">Consumo de ração</th>
                            <th class="px-4 py-3 sm:px-6">Peso</th>
                            <th class="px-4 py-3 sm:px-6">Data de nascimento</th>
                            <th class="px-4 py-3 sm:px-6">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gados as $gado)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td class="px-4 py-4 sm:px-6">{{ $gado->codigo }}</td>
                                <td class="px-4 py-4 sm:px-6">{{ $gado->leite }}</td>
                                <td class="px-4 py-4 sm:px-6">{{ $gado->racao }}</td>
                                <td class="px-4 py-4 sm:px-6">{{ $gado->peso }}</td>
                                <td class="px-4 py-4 sm:px-6">{{ \Carbon\Carbon::parse($gado->data_nascimento)->format('d/m/Y') }}</td>
                                <td class="px-4 py-4 sm:px-6">
                                    <form action={{ route('gado.updateAbate', $gado->id) }} method="POST" onsubmit="return confirm('Tem certeza que deseja mandar para abate?');">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="w-full text-white text-sm px-3 py-2 rounded sm:px-4" style="background: red">Mandar para abate</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection