@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        Add New Post
    </a>
</div>

@if($posts->isEmpty())
    <div class="alert alert-info">
        No posts available. Create your first post!
    </div>
@else
    <div class="row">
        @foreach($posts as $post)
            @include('components.post-card', ['post' => $post])
        @endforeach
    </div>
@endif
@endsection
