@extends('layouts.main')

@section('HomeContent')
<div class="bg-info">

    <div class="container text-center">
        <h1>Visita i nostri Comics</h1>
    
        <a class="btn btn-primary" href=" {{ route('comics.index') }} ">Vai al catalogo</a>
        <img src="https://images8.alphacoders.com/974/thumb-1920-974682.jpg" class="img-fluid" alt="...">
    
    </div>
    
</div>

@endsection