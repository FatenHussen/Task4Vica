@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="h4">{{ $post->title }}</h1>
            <p>
                <strong>Category:</strong> {{ $post->category->name }} <br>
                <strong>Tags:</strong> 
                @foreach ($post->tags as $tag)
                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                @endforeach
            </p>
            <p>{{ $post->content }}</p>
            <p class="text-muted">Created by: {{ $post->user->name }}</p>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="card">
        <div class="card-header">
            <h5>Comments</h5>
        </div>
        <div class="card-body">
            @foreach ($post->comments as $comment)
                <div class="mb-3">
                    <strong>{{ $comment->user->name }}</strong>:
                    <p>{{ $comment->content }}</p>
                </div>
            @endforeach

            <!-- Add Comment -->
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="mb-3">
                    <textarea name="content" class="form-control" rows="3" placeholder="Add your comment..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
        </div>
    </div>
</div>
@endsection
