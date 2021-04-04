@extends('layouts.app')

@section('content')

    <h1>{{ $comentario->email }}</h1>

    <table border="1">
        <tbody>
        <tr>
            <th>Texto</th>
            <td>{{ $comentario->texto }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{ $comentario->fecha }}</td>
        </tr>
        <tr>
            <th>Visible</th>
            <td>{{ $comentario->publicado ? 'Sí' : 'No' }}</td>
        </tr>
        </tbody>
    </table>

    <p>
        <a href="{{ route('comentarios.index') }}">Volver</a>
    </p>

@endsection
