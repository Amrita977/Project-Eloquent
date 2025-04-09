<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function create()
    {
        return view('adduser');
    }

    public function store(UserRequest $request)
    {
        // Validation
        // $request->validate([
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|email',
            // 'password' => 'required|alpha_num|min:6',
            // 'age' => 'required|numeric|min:18|max:100 ',
            // 'city' => 'required|string',
        // ]);

        // You can insert into DB here if needed
        $validated = $request->validated();
        // return back()->with('success', 'User added successfully!');
    }
}
