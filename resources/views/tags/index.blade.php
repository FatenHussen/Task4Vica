@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Tags</h1>
    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Add Tag</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{ route('tags.edit', $tag) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
