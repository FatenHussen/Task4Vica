@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('categories.index') }}" class="btn btn-primary w-100">Manage Categories</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('tags.index') }}" class="btn btn-primary w-100">Manage Tags</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.posts') }}" class="btn btn-primary w-100">View All Posts</a>
        </div>
    </div>
</div>
@endsection
