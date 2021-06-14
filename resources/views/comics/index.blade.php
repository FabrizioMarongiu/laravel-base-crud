@extends('layouts.main')

@section('ComicsContent')
    <div class="container">
        <h1>Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Tipo</th>
                    <th colspan='3'>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td> {{ $comic->id }} </td>
                        <td> {{ $comic->title }} </td>
                        <td> {{ $comic->type }} </td>
                        
                        <td>
                            <a class="btn btn-success"href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                        </td>
                        <td>
                            <a class="btn btn-success"href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                        </td>
                        <td>
                            <a class="btn btn-success"href="{{ route('comics.destroy', $comic->id) }}">DELETE</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $comics->links() }}
    </div>

@endsection