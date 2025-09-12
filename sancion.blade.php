@extends('layout/template')
@section('title', 'Sancionar Equipos' | 'La Liga')
@section('contenido')

<main>
    <h2>Sancionar Equipo</h2>
    <div class="container">
        <form action="{{ route('partidos.multar') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="nombreEquipo">Nombre del Equipo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombreEquipo" id="nombreEquipo" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Puntos">Puntos:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" min="0" max="50" setp="0.01" name="puntosSancion" id="puntos" required>
                </div>
            </div>
            <a href="{{ url('/equipos') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection
