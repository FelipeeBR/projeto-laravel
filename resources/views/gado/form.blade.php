@php
    $gado = $gado ?? null;
@endphp
<form action={{ isset($gado->id) ? route('gado.update', $gado->id) : route('gado.store') }} method="POST">
    @csrf
    @csrf
    @if(isset($gado->id))
        @method('PUT')
    @endif

    <div class="card-body">
        <div class="form-group">
            <label for="inputCodigo">Código</label>
            <input type="text" id="inputCodigo" name="codigo" 
                value="{{ old('codigo', $gado->codigo ?? null) }}"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="inputLeite">Quantidade de leite (semanal)</label>
            <input type="text" id="inputLeite" name="leite" 
                value="{{ old('leite', $gado->leite ?? null) }}"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="inputRacao">Quantidade de ração (semanal)</label>
            <input type="text" id="inputRacao" name="racao" 
                value="{{ old('racao', $gado->racao ?? null) }}"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="inputPeso">Peso</label>
            <input type="text" id="inputPeso" name="peso" 
                value="{{ old('peso', $gado->peso ?? null) }}"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="inputData">Data de nascimento</label>
            <input type="date" id="inputData" name="data_nascimento" 
                value="{{ old('data_nascimento', $gado->data_nascimento ?? null) }}"
                class="form-control">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                {{ isset($gado->id) ? 'Atualizar' : 'Cadastrar' }}
            </button>
        </div>
    </div>
</form>
