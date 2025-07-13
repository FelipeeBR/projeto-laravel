@extends('layouts.app')

@section('title', 'Lista de Gados')

@section('content')
    <div class="flex items-center justify-center">
        <div class="p-4 w-full max-w-7xl">
            <div class="flex items-center justify-center pb-4">
                <h3 class="mb-2 text-2xl text-center tracking-tight text-gray-900 dark:text-white" style="font-weight: 600">
                    Listagem de Gados
                </h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full bg-white border border-gray-300 shadow-lg">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-4 py-3 sm:px-6">Código</th>
                            <th class="px-4 py-3 sm:px-6">Data de nascimento</th>
                            <th class="px-4 py-3 sm:px-6">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gados as $gado)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td class="px-4 py-4 sm:px-6">{{ $gado->codigo }}</td>
                                <td class="px-4 py-4 sm:px-6">{{ $gado->data_nascimento }}</td>
                                <td class="px-4 py-4 sm:px-6">
                                    <div class="flex flex-col gap-2">
                                        <a href="{{ route('gado.show', $gado->codigo) }}" 
                                            class="inline-flex justify-center items-center text-white text-sm px-3 py-2 rounded sm:px-4 mb-2" style="background: dodgerblue">
                                            Visualizar
                                        </a>   
                                        <a href="{{ route('gado.edit', $gado->id) }}" 
                                            class="inline-flex justify-center items-center text-white text-sm px-3 py-2 rounded sm:px-4 mb-2" style="background: forestgreen">
                                            Editar
                                        </a>
                                        <form action="{{ route('gado.destroy', $gado->id) }}" method="POST" class="sm:inline-block w-full sm:w-auto" 
                                            onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="w-full text-white text-sm px-3 py-2 rounded sm:px-4" 
                                                    style="background: red">
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
        </div>
    </div>
@endsection