@extends('layout.template')
@section('title', 'Show Equipos | La Liga')
@section('contenido')
<main>
    <div class="container py-4">
        <p>Nombre: {{ $equipo->nombre}}
        <p>Puntos: {{ $equipo->puntos}}</p>
        <p>Ciudad: {{ $equipo->ciudad}}</p>
        <a href="{{ url('equipos') }}"><i class="fa fa-list" aria-hidden="true"></i></a>
    </div>
</main>