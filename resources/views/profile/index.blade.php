@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Your Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
    </div>

    @if ($posts->isEmpty())
        <div class="alert alert-info">You have not created any posts yet. Click "Add New Post" to create one!</div>
    @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                <strong>Category:</strong> {{ $post->category->name }} <br>
                                <strong>Tags:</strong>
                                @foreach ($post->tags as $tag)
                                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                                @endforeach
                            </p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-success">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
