<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function allPosts()
    {
        $posts = Post::with(['user', 'category', 'tags'])->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }
}
