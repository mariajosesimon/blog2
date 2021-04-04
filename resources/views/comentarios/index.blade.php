@extends('layouts.app')

@section('content')

    <h1>comentarios</h1>

    <table border="1">
        <thead>
        <tr>
            <th>Email</th>
            <th>Fecha</th>
            <th>Publicado</th>
            <th colspan="2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comentarios as $comentario)
            <tr>
                <td><a href="{{ route('comentarios.show', $comentario->id) }}">{{ $comentario->email }}</a></td>
                <td>{{ $comentario->fecha }}</td>
                <td>{{ $comentario->publicado ? 'Sí' : 'No' }}</td>
                <td><a href="{{ route('comentarios.edit', $comentario->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST"
                          onsubmit="return confirm('¿Estás seguro?');">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="borrar" value="Borrar"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <p>
        <a href="{{ route('comentarios.create') }}">Nuevo comentario</a>
    </p>

@endsection
