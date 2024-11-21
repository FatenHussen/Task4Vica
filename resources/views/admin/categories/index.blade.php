@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add New Category</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>
                        @if ($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" width="50">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
