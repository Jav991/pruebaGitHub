@extends('layout/template')
@section('title', 'Registrar libros | Biblioteca')
@section('contenido')

<main>
    <div class="container">
        <h2>Registrar Equipo</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>  <!-- Mostrar error -->
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('equipos') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="nombre">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre"  required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="puntos">Puntos:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="puntos" id="puntos" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="ciudad">Ciudad:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                </div>
            </div>
            <a href="{{ url('equipos') }}" class="btn btn-secondary">Volver</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection