<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function view_profile()
    {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }
    public function update_profile(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->update();
        return redirect()->route('home')->with('status', 'Profile Updated Successfully');
    }
}
