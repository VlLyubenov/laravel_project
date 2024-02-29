@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                    <h3>Create a listing</h3>
                    <form action="{{ route('listings.update', $listings) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="{{$listings->title}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <textarea name="text" id="text" cols="30" rows="10" class="form-control">{{$listings->text}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
