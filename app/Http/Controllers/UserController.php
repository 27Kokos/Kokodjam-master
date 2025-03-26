<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserProfile(){
        $user = auth()->user();
        return view('pages.profile', ['user'=>$user]);
    }
}
