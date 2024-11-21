@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ $post->category }}" required>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" id="tags" class="form-select" multiple required>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
