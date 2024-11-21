@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
