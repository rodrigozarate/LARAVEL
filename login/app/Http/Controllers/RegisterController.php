<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * show - show the view
     */
    public function show(){
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
