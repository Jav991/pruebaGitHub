@extends('layout/template')

@section('title', 'Editar equipo | La liga')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Editar Equipo</h2>
          <!-- Mostrar errores de validación -->
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario para editar -->
        <form action="{{ url('equipos/' . $equipo->id) }}" method="post">
            @method("PUT") <!-- Especificamos que es una actualización -->
            @csrf <!-- Token de seguridad -->

            <!-- Campo Nombre -->
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $equipo->nombre}}" required>
                </div>
            </div>

            <!-- Campo puntos -->
            <div class="mb-3 row">
                <label for="puntos" class="col-sm-2 col-form-label">Puntos:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="puntos" id="puntos" value="{{ $equipo->puntos }}" required>
                </div>
            </div>

            <!-- Campo ciudad -->
            <div class="mb-3 row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="ciudad" id="ciudad" value="{{ $equipo->ciudad }}" required>
                </div>
            </div>
            <!-- Botones -->
            <a href="{{ url('equipos') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>
@endsection