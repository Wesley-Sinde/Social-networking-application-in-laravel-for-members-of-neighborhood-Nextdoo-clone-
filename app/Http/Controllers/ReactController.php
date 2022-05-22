<?php

namespace App\Http\Controllers;

use App\Models\My_neighbor;
use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function toggle(My_neighbor $post, Request $request)
    {
        $post->toggleReaction($request->reaction);
    }
}
