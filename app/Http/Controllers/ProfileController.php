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
        
        if($password != " "){
            if (!Hash::check($password,  Auth::user()->password)) {
                if(){
                    Hash::make($request->new-password);
                }
                
            }
        }
    }

}
