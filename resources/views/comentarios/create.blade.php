
@extends('layouts.app')

@section('content')

    <h1>Nuevo Comentario</h1>

    <form action="{{ route('comentarios.store') }}" method="POST">
        @csrf
        <div>
            <label>Email: </label>
            <input type="email" name="email"/>
            <span>{{ $errors->first('email') }}</span>
        </div>
        <div>
            <label>Texto: </label>
            <textarea name="texto"></textarea>
        </div>
        <div>
            <label>Fecha: </label>
            <input type="datetime-local" name="fecha" value="{{ now() }}"/>
        </div>
        <div>
            <label>Publicado: </label>
            <input type="checkbox" name="publicado" checked/>
        </div>
        <input type="submit" name="guardar" value="Guardar"/>
    </form>

    <p>
        <a href="{{ route('comentarios.index') }}">Cancelar</a>
    </p>

@endsection
