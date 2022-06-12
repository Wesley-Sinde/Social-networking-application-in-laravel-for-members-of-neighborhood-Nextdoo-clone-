<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function checkName(Request $request)
    {
        if ($request->get('name')) {
            $data =  User::where('username', '=', $request->get('name'))->count();
            if ($data > 0) {
                echo 'not_unique';
            } else {
                echo 'unique';
            }
        }
        //$checkifitsthesamename=User::where('id','=', Auth::User()->id)
        // return User::where('username', '=', $request->get('name'))->first();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fulname' => 'required',
            'dob' => 'required',
            'username' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'bio' => 'required',
        ]);

        // $date = str_replace('/', '-', $request->dob);
        // $newdob = date("d-m-Y", strtotime($date));
        $newdob = Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d');
        //  OR
        //  Carbon::createFromFormat('d/m/Y', $request->stockupdate)->format('Y-m-d')


        if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg,gif,webp,|max:5048'
            ]);
            $newImageName = uniqid() . '-' . $request->username . '.' . $request->image->extension();
            $request->image->move(public_path('images/user'), $newImageName);
            //update
            User::where('id', Auth::User()->id)
                ->update([
                    'name' => $request->input('fulname'),
                    'avatar' => $newImageName,
                    'country' => $request->input('country'),
                    'gender' => $request->input('gender'),
                    'bio' => $request->input('bio'),
                    'dob' => $newdob,
                    'username' => $request->input('username'),
                ]);
        } else {
            User::where('id', Auth::User()->id)
                ->update([
                    'name' => $request->input('fulname'),
                    'country' => $request->input('country'),
                    'gender' => $request->input('gender'),
                    'bio' => $request->input('bio'),
                    'dob' => $newdob,
                    'username' => $request->input('username'),
                ]);
        }
        if ($request->stay) {
            return redirect('/profile')->with('message', 'Your Post Is Now Live!');
        } else {
            return redirect('/dashboard')->with('message', 'Your Details Was updated!');
        }

        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
