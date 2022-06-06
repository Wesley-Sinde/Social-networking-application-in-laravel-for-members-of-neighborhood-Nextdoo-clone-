<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class CommentsController extends Controller
{
  // public function fetchcomments($id)
  // {
  //   $data = Comments::select("*")
  //     ->where("post_id", $id)
  //     ->orderBy('id', 'desc')
  //     ->paginate(3);
  //   dd($data);
  //   return response()->json($data);
  //   // dd($id);
  // }
  public function fetchcomments($id)
  {
    // $data = Comments::where('post_id', $postid)->orderBy('id', 'desc')->paginate(10);
    $data = Comments::select("*")
      ->where("post_id", $id)
      ->orderBy('id', 'desc')
      ->paginate(5);
    return response()->json($data);
  }

  public function userdata($id)
  {
    $userdata = User::where("id", $id)->first();
    return response()->json($userdata);
  }
  public function try()
  {
    // $users = DB::table('Comments')
    //   ->join('users', 'users.id', '=', 'Comments.user_id')
    //   ->select('Comments.id', 'Comments.Comment',  'users.name')
    //   ->paginate(10);


    //$users = Comments::crossJoin('users')
    $users = Comments::leftJoin('comments', 'comments.user_id', '=', 'users.id')
      ->select('Comments.*')
      ->paginate(10);
    return view('try1', compact('users'));



    // $users = Comments::select(
    //   "Comments.id",
    //   "Comments.Comment",
    //   "users.name as users_name"
    // )
    //   //->join("users", "users.id", "=", "Comments.user_id")
    //   ->join("Comments", "Comments.user_id", "=", "users.id")
    //   ->paginate(10);

    //return view('try1', compact('users'));
    //dd($users);
  }
}
