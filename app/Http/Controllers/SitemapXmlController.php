<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    // public function index()
    // {
    //     $post = Post::orderBy('updated_at', 'desc')->first();

    //     return response()->view('sitemap.index', [
    //         'post' => $post,
    //     ])->header('Content-Type', 'text/xml');
    // }

    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return response()->view('sitemap.index', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
