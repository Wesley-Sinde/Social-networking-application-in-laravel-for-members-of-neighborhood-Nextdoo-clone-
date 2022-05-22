<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyNeighborController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            return redirect()->action([
                MyNeighborController::class, 'index'
            ]);
        }
        return view('home');
    }

    //about
    public function about()
    {
        return view('about');
    }
    //Contact
    public function contact()
    {
        return view('contact');
    }
    //Services
    public function services()
    {
        return view('services');
    }
    //my portfolio
    public function portfolio()
    {
        return view('wesley.portfolio');
    }
}
