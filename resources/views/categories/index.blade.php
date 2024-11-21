@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add Category</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    @if ($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
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
