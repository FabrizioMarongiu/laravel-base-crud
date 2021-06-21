@extends('layouts.main')

@section('CreateContent')
    <div class="container">
        <h1>Create New Comics</h1>

       
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="'title" class="control-lable">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="'description" class="control-lable">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                </div>
                <div class="mb-3">
                    <label for="'image" class="control-lable">Image</label>
                    <input type="text" class="form-control" name="image" id="image">
                </div>
                <div class="mb-3">
                    <label for="'price" class="control-lable">Price</label>
                    <input type="number" step="any" class="form-control" name="price" id="price">
                </div>
                <div class="mb-3">
                    <label for="type" class="control-lable">Type</label>
                    <select class="form-control" name="type" id="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="'sale_date" class="control-lable">Sales Data</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date">
                </div>
                <div class="mb-3">
                    <label for="'series" class="control-lable">Series</label>
                    <input type="text" class="form-control" name="series" id="series">
                </div>

                <button type="submit" class="btn btn-primary">Create Comics</button>

            </form>

            </div>
        </div>

    </div>

@endsection