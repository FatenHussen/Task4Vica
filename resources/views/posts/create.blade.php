@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <select name="tags[]" id="tags" class="form-control" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Create Post</button>
</form>
@endsection
