<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with(['user', 'category', 'tags'])->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
        ]);

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }

  

  

    public function show($id)
    {
        $post = Post::with(['user', 'category', 'tags', 'comments.user'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
