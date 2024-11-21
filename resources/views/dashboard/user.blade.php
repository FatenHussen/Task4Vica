@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Welcome Section -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Welcome, {{ $user->name }}!</h5>
                    <p>Email: {{ $user->email }}</p>
                </div>
            </div>
        </div>

        <!-- User Posts Section -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h6>Your Posts</h6>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-end">Create New Post</a>
                </div>
                <div class="card-body">
                    @if ($posts->count())
                        <ul class="list-group">
                            @foreach ($posts as $post)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>{{ $post->title }} ({{ $post->category->name }})</span>
                                    <div>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No posts found. Create your first post!</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- User Comments Section -->
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h6>Your Comments</h6>
                </div>
                <div class="card-body">
                    @if ($comments->count())
                        <ul class="list-group">
                            @foreach ($comments as $comment)
                                <li class="list-group-item">
                                    <strong>{{ $comment->post->title }}</strong>: {{ $comment->content }}
                                    <div class="float-end">
                                        <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No comments found. Start engaging with posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

