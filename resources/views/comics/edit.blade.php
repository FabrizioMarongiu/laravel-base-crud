@extends('layouts.main')

@section('CreateContent')
    <div class="container">
        <h1>
            Edit New Comics:
            <a href=" {{ route('comics.show', $comic->id) }} ">{{ $comic->title }}</a>
        </h1>

       
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="'title" class="control-lable">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value=" {{ $comic->title }} ">
                </div>
                <div class="mb-3">
                    <label for="'description" class="control-lable">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="6" >{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="'image" class="control-lable">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value=" {{ $comic->image }} ">
                </div>
                <div class="mb-3">
                    <label for="'price" class="control-lable">Price</label>
                    <input type="number" step="any" class="form-control" name="price" id="price" value=" {{ $comic->price }} ">
                </div>
                <div class="mb-3">
                    <label for="'type" class="control-lable">Type</label>
                    <select class="form-control" name="type" id="type" >
                        <option value="comic book" @if( $comic->type == 'comic book' ) selected @endif>Comic Book</option>

                        <option value="graphic novel" @if( $comic->type == 'graphic novel' ) selected @endif >Graphic Novel</option>
                    </select>
                </div>
                <div class="mb-3">>@dump($comic->sale_date)
                    <label for="'sale_date" class="control-lable">Sales Data</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" value=" {{ $comic->sale_data }} ">
                </div>
                <div class="mb-3">
                    <label for="'series" class="control-lable">Series</label>
                    <input type="text" class="form-control" name="series" id="series" value=" {{ $comic->series }} ">
                </div>

                <button type="submit" class="btn btn-primary">Edit Comics</button>

            </form>

            </div>
        </div>

    </div>

@endsection