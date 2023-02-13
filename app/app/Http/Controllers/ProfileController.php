<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit_profile(){
        // dd('hi'); => var_dump() + die(); 
        $user = auth()->user();
        $data['user'] = $user;
        return view('profile.edit_profile', $data);
    }
    public function up_date_profile( Request $request){

    $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    ],[
            'name.required' => 'name is required',
            'email.required'=> 'email is required',
            'password.required' => 'email is required',
    ]);
    
    $request->save();
    return redirect()->route('edit_profile')->with('seccess','profile has updated');
    }
}
