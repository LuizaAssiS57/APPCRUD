<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view("Login");
    }

    public function login(Request $request) {
        validator($request->all(), [
            "email"=> ["required","email"],
            "password"=> ["required"]
        ]);

        if(auth()->attempt(request()->only(["email","password"]))) {
            return redirect(route("dashboard.index"));
        }

        return redirect()->back()->withErrors(["email"=> "E-mail ou senha estão incorretos"]);
    }

    public function logout() {
        auth()->logout();
        return redirect(route("login"));
    }
}

