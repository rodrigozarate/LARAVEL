<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * show - show the view
     */
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }

    /**
     * register - allows register
     * @request: data from form
     */
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'New User');
    }
}
