@extends('layouts.app')

@section('title', 'Relatório de Abate')

@section('content')
    <div>
        @foreach ($gados as $gado)
            {{ $gado }}
        @endforeach
    </div>
@endsection