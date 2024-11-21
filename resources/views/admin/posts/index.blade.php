@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <span class="badge bg-secondary">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
@endsection
