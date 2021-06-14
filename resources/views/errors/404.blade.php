@extends('layouts.main')

@section('ErrorContent')

<div class="container text-center">
    <h1>404</h1>

    <h3 class="mb-5">Pagina non trovata</h3>

    <a href=" {{ route('home') }} ">BACK</a>
</div>
    
@endsection