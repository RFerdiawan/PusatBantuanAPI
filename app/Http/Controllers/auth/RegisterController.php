<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|alpha_num|min:3|max:25|unique:App\Models\User,username',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:4',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response('Terima Kasih');

    }

}
