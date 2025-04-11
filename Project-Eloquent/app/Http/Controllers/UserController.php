<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = User::all();
        //  $users =User::find([2,5],['name','email']);
        // $users =User::count();
        // $users =User::min('age');
        // $users =User::max('age');
        //    $users =User::where('city','Delhi')->
        //    where('age','>',20)->get();
        //  return $users;
        // @foreach($users as $user)
        //   echo $user->name ."<br>";
         return view("home",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'useremail' => 'required|email|unique:users,email',
        'userage' => 'required|integer|min:1|max:120',
        'usercity' => 'required|string|max:255',
    ]);

    $user = new User;
    $user->name = $request->username;
    $user->email = $request->useremail;
    $user->age = $request->userage;
    $user->city = $request->usercity;

    $user->save();

    return redirect()->route('user.index')
        ->with('status', 'New User Added Successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(User $user)
{
    return view("viewuser", compact('user'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("updateuser", compact('user'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'useremail' => 'required|email',
        'userage' => 'required|integer|min:1|max:120',
        'usercity' => 'required|string|max:255',
    ]);

    $user->name = $request->username;
    $user->email = $request->useremail;
    $user->age = $request->userage;
    $user->city = $request->usercity;

    $user->save();

    return redirect()->route('user.index')
        ->with('status', 'User Data Updated Successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
