@extends('layout')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listings as $listing)
                <tr>
                    <td>{{ $listing->id }}</td>
                    <td><a href="{{ route('listings.show', $listing->id) }}">{{ $listing->title }}</a></td>
                    <td>{{ $listing->created_at }}</td>
                    <td>{{ $listing->updated_at }}</td>
                    <td>
                        <form action="{{ route('listings.edit', $listing->id) }}">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </from>
                    </td>
                    <td>
                        <form action="{{ route('listings.destroy', $listing->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
