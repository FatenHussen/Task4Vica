<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $posts = $user->posts; // Posts created by the user
        $comments = $user->comments; // Comments made by the user

        return view('dashboard', compact('user', 'posts', 'comments'));
    }
}
