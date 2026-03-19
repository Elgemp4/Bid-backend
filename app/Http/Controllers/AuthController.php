<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin() {
        return view("auth.login");
    }

    public function login(LoginRequest $request) {
        $data = $request->validated();

        if(Auth::attempt($data)) {
            return redirect()->route("kpi");
        }
        else{
            throw ValidationException::withMessages(["name" => "Invalid credentials", "password" => "Invalid credentials"]);
        }
    }

    public function uitloggen(Request $request) {
        Auth::logout();

        return redirect()->route("login");
    }
}
