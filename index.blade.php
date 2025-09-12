@extends('layout/template')
@section('title', 'Partidos | La Liga')
@section('contenido')

<main>
    <h2>Partido</h2>
    <div class="container">
        <form action="{{ route('partidos.ganador') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="equipo_local">Nombre del Equipo Local:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="equipo_local" id="equipo_local" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="goles_local">Goles Equipo Local:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="goles_local" id="goles_local" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="equipo_visitante">Nombre del Equipo Visitante:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="equipo_visitante" id="equipo_visitante" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="goles_visitante">Goles Equipo Visitante:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="goles_visitante" id="goles_visitante" required>
                </div>
            </div>

            <a href="{{ url('/equipos') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection
