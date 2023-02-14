<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function edit_profile(){
        
        $user = auth()->user();
        $data['user'] = $user;
        return view('profile.edit_profile', $data);
    }
    public function update_profile( Request $request){        
       $user =  User::find(auth()->user()->id);
       $user->name= $request->input('name');
       $user->email= $request->input('email');
       $user->update();
    return redirect()->route('food.dashboard')->with('seccess','profile has updated');
    }
}
