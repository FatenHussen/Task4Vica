<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <textarea name="content" class="form-control mb-3" placeholder="Add a comment..."></textarea>
    <button type="submit" class="btn btn-primary">Post Comment</button>
</form>
