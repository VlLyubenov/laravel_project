@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <h2>{{ $listings->title }}</h2>

            <p>{{ $listings->text }}</p>

            <img src="{{ asset('/storage'.$listings->image) }}" alt="no image">

            <form action="{{ route('listings.index') }}">
                <button type="submit" class="btn btn-primary">Back</button>
            </form>

        </div>
        <div class="col"></div>
    </div>
</div>

@endsection
