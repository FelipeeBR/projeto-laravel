@extends('layouts.app')

@section('title', 'Editar Gado')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-center pb-4">
            <h3 class="font-semibold text-xl text-gray-800 leading-tight text-center">Preencha os Campos</h3>
        </div>
        @include('gado.form', ['gado' => $gado])
    </div>
@endsection
