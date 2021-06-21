@extends('layouts.main')

@section('ComicsContent')
    <div class="container">
        <h1>Comics</h1>

        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }} </strong>

                ELIMINATO
            </div>            
        @endif

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
                            <a class="btn btn-warning"href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                        </td>
                        <td>
                           <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $comics->links() }} --}}
    </div>

@endsection