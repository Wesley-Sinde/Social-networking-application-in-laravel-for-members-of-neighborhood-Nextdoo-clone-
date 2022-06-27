<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostSitemapController extends Controller
{
    public function index()
    {
        $alphas = range('a', 'z');

        return response()->view('sitemap.posts.index', [
            'alphas' => $alphas,
        ])->header('Content-Type', 'text/xml');
    }

    public function show($letter)
    {
        $posts = Post::where('title', 'LIKE', "$letter%")->get();

        return response()->view('sitemap.posts.show', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}
