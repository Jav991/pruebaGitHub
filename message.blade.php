@extends('layout/template')
@section('title', 'Registrar Libro | Escuela')
@section('contenido')

<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{ url('equipos') }}" class="btn btn_primary">Regresar</a>
    </div>
</main>