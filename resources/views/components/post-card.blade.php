<div class="col-md-4 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">
                <strong>Category:</strong> {{ $post->category->name }} <br>
                <strong>Tags:</strong> 
                @foreach($post->tags as $tag)
                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                @endforeach
            </p>
            <p class="text-muted">Created by: {{ $post->user->name }}</p>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">View</a>
        </div>
    </div>
</div>
