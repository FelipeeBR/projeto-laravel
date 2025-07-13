@php
    $gado = $gado ?? null;
@endphp
<form action={{ isset($gado->id) ? route('gado.update', $gado->id) : route('gado.store') }} method="POST">
    @csrf
    @csrf
    @if(isset($gado->id))
        @method('PUT')
    @endif

    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="space-y-4">
            <!-- Campo Código -->
            <div class="space-y-1">
                <label for="inputCodigo" class="block text-sm font-medium text-gray-700">Código</label>
                <input type="text" id="inputCodigo" name="codigo" 
                    value="{{ old('codigo', $gado->codigo ?? null) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo Quantidade de Leite -->
            <div class="space-y-1">
                <label for="inputLeite" class="block text-sm font-medium text-gray-700">Quantidade de leite (semanal)</label>
                <input type="text" id="inputLeite" name="leite" 
                    value="{{ old('leite', $gado->leite ?? null) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo Quantidade de Ração -->
            <div class="space-y-1">
                <label for="inputRacao" class="block text-sm font-medium text-gray-700">Quantidade de ração (semanal)</label>
                <input type="text" id="inputRacao" name="racao" 
                    value="{{ old('racao', $gado->racao ?? null) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo Peso -->
            <div class="space-y-1">
                <label for="inputPeso" class="block text-sm font-medium text-gray-700">Peso</label>
                <input type="text" id="inputPeso" name="peso" 
                    value="{{ old('peso', $gado->peso ?? null) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo Data de Nascimento -->
            <div class="space-y-1">
                <label for="inputData" class="block text-sm font-medium text-gray-700">Data de nascimento</label>
                <input type="date" id="inputData" name="data_nascimento" 
                    value="{{ old('data_nascimento', $gado->data_nascimento ?? null) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="text-white text-sm px-3 py-2 rounded sm:px-4" style="background: forestgreen">
                {{ isset($gado->id) ? 'Atualizar' : 'Cadastrar' }}
            </button>
        </div>
    </div>
</form>
