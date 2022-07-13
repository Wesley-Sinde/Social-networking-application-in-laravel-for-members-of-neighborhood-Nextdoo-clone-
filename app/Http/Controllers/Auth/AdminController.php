<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\My_neighbor;
use App\Models\User;
use App\Models\shetabit_visits;
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
    public function index()
    {
        $totalUsers = User::count();

        $totalUniqueVisitors = shetabit_visits::distinct('ip')->count('ip');
        $totalVisitors = shetabit_visits::count();
        $Totalposts = My_neighbor::count();
        $TotalComments = Comments::count();




        return view(
            '/admin/dashboardApp',
            compact(
                'totalUsers',
                'totalVisitors',
                'totalUniqueVisitors',
                'Totalposts',
                'TotalComments'
            )
        );
        // return view('admin');
    }
}
