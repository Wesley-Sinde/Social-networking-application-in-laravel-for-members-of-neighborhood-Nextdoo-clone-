<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\Storemy_neighborRequest;
use App\Http\Requests\Updatemy_neighborRequest;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMembersmail;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['dashboard']]);
    }


    /**
     * Display a listing of the resource.
     * Books::where('id', $id)->first()
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('Profile.index');
    }


    public function userdata($id)
    {
        $userdata = Books::where("id", $id)->paginate(10);
        return response()->json($userdata);
    }

    public function getcritical()
    {
        $data = Books::orderBy('id', 'desc')
            ->groupBy('level')
            ->paginate(4);
        return response()->json($data);
    }


    // public function getcriticalpreview()
    // {
    //     $data = Books::orderBy('level', 'desc')->take(5)->get();
    //     return response()->json($data);
    // }

    public function getcriticalpreview()
    {
        $my_objects = Books::orderBy('level', 'desc')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();


        //$data = Books::orderBy('level', 'desc')->take(5)->get();
        return response()->json($my_objects);
    }

    public function neighbors(Request $request)
    {

        // $location->isoCode = $record->country->isoCode;
        // $location->countryName = $record->country->name;
        // $location->cityName = $record->city->name;
        // $location->longitude  = $record->postal->code;
        // $location->latitude = $record->location->latitude;
        // $location->driver = get_class($this);

        // $ip = '197.248.192.135'; /* Static IP address */
        $ip = $request->ip();
        $currentUserInfo = Location::get($ip);

        $Books = User::where('location', '=',  $currentUserInfo->cityName)
            ->paginate(10);
        return view('neighbors', compact('Books'));
    }

    public function critical(Request $request)
    {
        $Books = Books::orderBy('level', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(8);


        if ($request->ajax()) {
            return view('critical', compact('Books'));
        }

        return view('critical', compact('Books'));
    }


    public function profiles($id)
    {
        return view('profiles')
            ->with('profile', User::where('id', $id)->first());
    }

    public function userlocation($id)
    {
        return view('Userlocatiom')
            ->with('Userlocatiom', User::where('id', $id)->first());
    }
    public function index(Request $request)
    {

        $socialShare = \Share::page(
            url('/home'),
            'hello'
            // $post->url,
            // $post->title,
        )
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram();
        //dd($socialShare);
        // return view('posts.show', compact('socialShare'));

        // dd($postdata);
        $Books = Books::orderBy('created_at', 'desc')->paginate(8);


        if ($request->ajax()) {
            return view('dashboard', compact('Books', 'socialShare'));
        }

        return view('dashboard', compact('Books', 'socialShare'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storemy_neighborRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemy_neighborRequest $request)
    {

        //dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,webp,|max:5048'
        ]);
        //  try {

        // return view('dashboard', compact('Books'));
        $ip = $request->ip(); //Dynamic IP address */
        // $ip = '197.248.192.135'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        //dd($request->input('level'));

        if (Auth::check()) {
            $cityName = $currentUserInfo->cityName;
            //dd($cityName);
            // The user is logged in...
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            Books::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'level' => $request->input('level'),
                'image_path' => $newImageName,
                'location' => $cityName,
                'user_id' => auth()->user()->id
            ]);

            // $order = Books::findOrFail(12);
            // $postdata = Books::where("user_id", Auth::User()->id);

            $postdata = Books::where("user_id", '=',  Auth::User()->id)
                ->orderBy('created_at', 'desc')
                ->first();

            $Useremail = User::select('email')
                ->where('location', '=',  $currentUserInfo->cityName)
                ->get();
            $resultArray = $Useremail->toArray();
            //dd($resultArray);

            foreach ($resultArray as $recipient) {
                Mail::to($recipient)->send(new NotifyMembersmail($postdata));; //send(new OrderShipped($order));
            }
            Mail::to('sindewesley5@gmail.com')->send(new NotifyMembersmail($postdata));


            return redirect('/home')->with('message', 'Your Post Is Now Live!');
        }
        // } catch (\Throwable $th) {
        return redirect('/home')->with('message', 'Your Post was not Added! error in finding your location. Kindly allow our site to access your Location');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\my_neighbor  $my_neighbor
     * @return \Illuminate\Http\Response
     */
    // public function show(Request $request)
    // {
    //     return view('show')
    //         ->with('Books', Books::where('slug', $request)->first());
    // }
    public function show($id)
    {
        try {
            $post = Books::find($id);
            $post->increment('view_count');
            $post->save();
        } catch (\Throwable $th) {
            //throw $th;
        }


        return view('show')
            ->with('post', Books::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\my_neighbor  $my_neighbor
     * @return \Illuminate\Http\Response
     */
    public function edit(books $my_neighbor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemy_neighborRequest  $request
     * @param  \App\Models\my_neighbor  $my_neighbor
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemy_neighborRequest $request, books $my_neighbor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\my_neighbor  $my_neighbor
     * @return \Illuminate\Http\Response
     */

    public function destroy($my_neighbor)
    {
        //dd($my_neighbor);
        $post = Books::where('id', $my_neighbor);
        $post->delete();


        return redirect('/home')->with('message', 'Your Post Has Been Deleted!');
    }
}
