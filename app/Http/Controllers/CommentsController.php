<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
  public function fetchcomments()
  {
    $data = Comments::orderBy('id')->paginate(10);
    return response()->json($data);
  }
}
