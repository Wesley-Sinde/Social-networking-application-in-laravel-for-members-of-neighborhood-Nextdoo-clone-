<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Books;
use App\Models\User;
use App\Models\shetabit_visits;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Shetabit\Visitor\Traits\Visitor;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return view('admin.users');
    }
    public function video()
    {
        return view('admin.video');
    }
    public function index()
    {
        $totalUsers = User::count();

        $totalUniqueVisitors = shetabit_visits::distinct('ip')->count('ip');
        $totalVisitors = shetabit_visits::count();
        $Totalposts = Books::count();
        $TotalComments = Comments::count();
        $remdays = \Carbon\Carbon::today()->subDay(7);
        // dd($remdays);'2022-06-13 17:33:51'
        $newuserThisweek = User::where('created_at', '>=', $remdays)->count();
        //  dd($newuserThisweek);
        return view(
            '/admin/dashboardApp',
            compact(
                'totalUsers',
                'totalVisitors',
                'totalUniqueVisitors',
                'Totalposts',
                'newuserThisweek',
                'TotalComments'
            )
        );
        // return view('admin');
    }

    public function usersdata(Request $request)
    {
        //$totalUsers = User::count();
        $posts = User::paginate(10);
        // dd($posts);
        return response()->json($posts);
    }
}
