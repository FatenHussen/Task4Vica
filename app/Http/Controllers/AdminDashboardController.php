<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('dashboard.admin', compact('categories', 'tags'));
    }
}

