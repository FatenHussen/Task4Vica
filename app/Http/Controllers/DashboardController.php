<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'category', 'tags')->latest()->get();
        return view('dashboard', compact('posts'));
    }
}
