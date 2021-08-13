<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view("pages.profile.index"); 
    }

    public function update(ProfileRequest $request){
        $password = $request->password;
        $user = Auth::user();
        
        if (!Hash::check($password,  Auth::user()->password)) {
            if($request->new->password == $request->re_password)){
                $user->password = Hash::make($new_password);
                $user->save();
                return view("pages.profile.index");
            }
        }

    }

}