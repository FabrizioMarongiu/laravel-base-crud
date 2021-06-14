@extends('layouts.main')

@section('ShowContent')


<div class="container">
    <h1>{{ $comic->title }}</h1>
    <div class="mb-5">
        <span class="badge bg-primary"> {{ $comic->title }}</span>
        <span class="badge bg-primary"> {{ $comic->price }} €</span>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! $comic->description !!}
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
        </div>
    </div>
    

    <a href=" {{ route('comics.index') }} ">Back</a>
</div>
    
@endsection