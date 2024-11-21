<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function edit(Comment $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate(['content' => 'required|string']);
        $comment->update(['content' => $request->content]);
        return redirect()->back()->with('success', 'Comment updated successfully!');
    }

    public function destroy(Comment $comment)
    {
        if ($comment->user_id !== Auth::id() && $comment->post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }
}
