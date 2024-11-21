@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2 class="mb-4">All Posts</h2>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <p class="text-muted">Created by: {{ $post->user->name }}</p>
                    <p class="text-muted">Category: {{ $post->category->name }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
