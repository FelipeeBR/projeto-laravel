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
            <label for="inputCodigo">Codigo</label>
            <input type="text" class="form-control" id="inputCodigo" name="codigo" value="{{ old('codigo', $gado->codigo ?? null) }}">
        </div>
        <div class="form-group">
            <label for="inputLeite">Quantidade de leite (semanal)</label>
            <input type="text" class="form-control" id="inputLeite" name="leite" value="{{ old('leite', $gado->leite ?? null) }}">
        </div>
        <div class="form-group">
            <label for="inputRacao">Quantidade de ração (semanal)</label>
            <input type="text" class="form-control" id="inputRacao" name="racao" value="{{ old('racao', $gado->racao ?? null) }}">
        </div>
        <div class="form-group">
            <label for="inputPeso">Peso</label>
            <input type="text" class="form-control" id="inputPeso" name="peso" value="{{ old('peso', $gado->peso ?? null) }}">
        </div>
        <div class="form-group">
            <label for="inputData">Data de nascimento</label>
            <input type="date" class="form-control" id="inputData" name="data_nascimento" value="{{ old('data_nascimento', $gado->data_nascimento ?? null) }}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            {{ isset($gado->id) ? 'Atualizar' : 'Cadastrar' }}
        </button>
    </div>
</form>
