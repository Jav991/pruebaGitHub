@extends('layout/template')
@section('title', 'Premiar Equipos | La Liga')
@section('contenido')

<main>
      <h2>Premiar Ciudad</h2>
    <div class="container">
        <form action="{{ route('partidos.procesaPremiar') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="nombreCiudad">Nombre de la ciudad</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Puntos">Puntos:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" min="0" max="50" setp="0.01" name="puntos" id="puntos" required>
                </div>
            </div>
            <a href="{{ url('/equipos') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-success">Premiar</button>
        </form>
    </div>
</main>