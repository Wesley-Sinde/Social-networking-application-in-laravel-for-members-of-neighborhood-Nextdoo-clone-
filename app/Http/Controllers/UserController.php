<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Cache;

class UserController extends Controller
{

    /** 
     * Show user online status.
     */
    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
        }
    }
}
