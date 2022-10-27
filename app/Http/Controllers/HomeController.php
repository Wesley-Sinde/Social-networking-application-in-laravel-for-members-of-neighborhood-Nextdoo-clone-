<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BooksController;

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
        // if (Auth::check()) {
        //     // The user is logged in...
        //     return redirect()->action([
        //         BooksController::class, 'index'
        //     ]);
        // }
        // return view('home');
        return redirect()->action([
            BooksController::class, 'index'
        ]);
        // $retVal = (Auth::user()) ? Auth::user()->id : null;
    }
    public function privacy_policy()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = config('APP_PHONE');
        return view('pages.other.privacy_policy', $data);
    }

    public function terms_of_use()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = config('APP_PHONE');
        return view('pages.other.terms_of_use', $data);
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
