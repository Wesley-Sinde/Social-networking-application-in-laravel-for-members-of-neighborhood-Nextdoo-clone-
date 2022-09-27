<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function toggle(Books $post, Request $request)
    {
        $post->toggleReaction($request->reaction);
    }
}
