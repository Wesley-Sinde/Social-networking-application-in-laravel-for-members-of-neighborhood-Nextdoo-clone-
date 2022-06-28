<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\My_neighbor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\Storemy_neighborRequest;
use App\Http\Requests\Updatemy_neighborRequest;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMembersmail;

class MyNeighborController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['dashboard']]);
    }


    /**
     * Display a listing of the resource.
     * My_neighbor::where('id', $id)->first()
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('Profile.index');
    }


    public function userdata($id)
    {
        $userdata = My_neighbor::where("id", $id)->paginate(10);
        return response()->json($userdata);
    }

    public function getcritical()
    {
        $data = My_neighbor::orderBy('id', 'desc')
            ->groupBy('level')
            ->paginate(4);
        return response()->json($data);
    }


    // public function getcriticalpreview()
    // {
    //     $data = My_neighbor::orderBy('level', 'desc')->take(5)->get();
    //     return response()->json($data);
    // }

    public function getcriticalpreview()
    {
        $my_objects = My_neighbor::orderBy('level', 'desc')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();


        //$data = My_neighbor::orderBy('level', 'desc')->take(5)->get();
        return response()->json($my_objects);
    }

    public function neighbors()
    {
        $ip = '197.248.192.135'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        $My_neighbor = User::where('location', '=',  $currentUserInfo->cityName)
            ->paginate(10);
        return view('neighbors', compact('My_neighbor'));
    }

    public function critical(Request $request)
    {
        $My_neighbor = My_neighbor::orderBy('level', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(8);


        if ($request->ajax()) {
            return view('critical', compact('My_neighbor'));
        }

        return view('critical', compact('My_neighbor'));
    }


    public function profiles($id)
    {
        return view('profiles')
            ->with('profile', User::where('id', $id)->first());
    }
    public function index(Request $request)
    {
        //my_neighbors
        // $My_neighbor = My_neighbor::orderBy('created_at', 'desc')->paginate(5);

        // if ($request->ajax()) {
        //     return view('dashboard', compact('My_neighbor'));
        // }
        try {

            // return view('dashboard', compact('My_neighbor'));
            /* $ip = $request->ip(); Dynamic IP address */
            $ip = '197.248.192.135'; /* Static IP address */
            $currentUserInfo = Location::get($ip);
            $currentUserInfo->cityName;



            if (Auth::check()) {
                // The user is logged in...
                $id = Auth::id();
                $userId = User::find($id);
                if ($userId) {
                    $userId->location = $currentUserInfo->cityName;
                    $userId->save();
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        // dd($postdata);
        $My_neighbor = My_neighbor::orderBy('created_at', 'desc')->paginate(8);


        if ($request->ajax()) {
            return view('dashboard', compact('My_neighbor'));
        }

        return view('dashboard', compact('My_neighbor'));
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

        // return view('dashboard', compact('My_neighbor'));
        /* $ip = $request->ip(); Dynamic IP address */
        $ip = '197.248.192.135'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        //dd($request->input('level'));

        if (Auth::check()) {
            $cityName = $currentUserInfo->cityName;
            //dd($cityName);
            // The user is logged in...
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            My_neighbor::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'level' => $request->input('level'),
                'image_path' => $newImageName,
                'location' => $cityName,
                'user_id' => auth()->user()->id
            ]);

            // $order = My_neighbor::findOrFail(12);
            // $postdata = My_neighbor::where("user_id", Auth::User()->id);

            $postdata = My_neighbor::where("user_id", '=',  Auth::User()->id)
                ->orderBy('created_at', 'desc')
                ->first();

            // Ship the order...

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
    //         ->with('My_neighbor', My_neighbor::where('slug', $request)->first());
    // }
    public function show($id)
    {
        try {
            $post = My_neighbor::find($id);
            $post->increment('view_count');
            $post->save();
        } catch (\Throwable $th) {
            //throw $th;
        }


        return view('show')
            ->with('post', My_neighbor::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\my_neighbor  $my_neighbor
     * @return \Illuminate\Http\Response
     */
    public function edit(my_neighbor $my_neighbor)
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
    public function update(Updatemy_neighborRequest $request, my_neighbor $my_neighbor)
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
        $post = My_neighbor::where('id', $my_neighbor);
        $post->delete();


        return redirect('/home')->with('message', 'Your Post Has Been Deleted!');
    }
}
