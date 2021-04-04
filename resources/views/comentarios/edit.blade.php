@extends('layouts.app')

@section('content')

    <h1>Editar Comentario</h1>

    <form action="{{ route('comentarios.update', $comentario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Título: </label>
            <input type="email" name="email" value="{{ $comentario->titulo }}"/>
            <span>{{ $errors->first('email') }}</span>
        </div>
        <div>
            <label>Texto: </label>
            <textarea name="texto">{{ $comentario->texto }}</textarea>
        </div>
        <div>
            <label>Fecha: </label>
            <input type="datetime-local" name="fecha" value="{{ $comentario->fecha ?: now() }}"/>
        </div>
        <div>
            <label>Publicado: </label>
            <input type="checkbox" name="publicado" {{ $comentario->publicado ? 'checked' : '' }} />
        </div>
        <input type="submit" name="guardar" value="Guardar"/>
    </form>

    <p>
        <a href="{{ route('comentarios.index') }}">Cancelar</a>
    </p>

@endsection
