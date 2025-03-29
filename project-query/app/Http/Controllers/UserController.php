<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    // public function index() {
    //     $users = User::all(); // Fetch all users
    //     return view('allusers', compact('users'));
    // }
    
    
    // public function showUsers() {
    //     $users = DB::table('users')->get();
    //     return view('allusers',['data'=>$users]);
       //
       public function allUsers(){
        $users = User::all();
        // $users =DB::table('users')
        // ->where('city', '=','goa')
        //     ->orWhere('age' ,'<',20)
        //     ->get();

        return view('allusers',compact('users'));
       }

       public function singleUser(string $id){
        $user = User::find($id); // ✅ Fetch user by ID
        if (!$user) {
            return abort(404, 'User not found'); // ✅ Handle missing user
        }
        return view('singleuser', compact('user')); // ✅ Pass single user to view
    }
          public function addUser(){
            $user = DB::table('users')
            ->insertGetId(
                [
                'name' =>'Amitabh Bachan',
                'email' =>'amitabh@gmail.com',
                'age' =>25,
                'city' =>'Pune',

                ],
                
            );
            return $user; 
        
        }
        public function updateUser(){
               $user =DB::table('users')
               ->where('id',6)
               ->update([
                'city' =>'Pune',
                'age'=>22,
               ]);


            if($user)
            {
                echo"<h1>Data Successfully Updated.</h1>";
               }
                else{
                echo"<h1>Data not Updated.</h1>";
            }

            // public function index() {
            //     $users = User::all(); // Fetch all users
            //     return view('allusers', compact('users'));
            // }
            
}
}



                // [
                //     'name' =>'Rama Kumar',
                //     'email' =>'rama@gmail.com',
                //     'age' =>29,
                //     'city' =>'delhi',
                //     'created_at' =>now(),
                //     'updated_at' =>now()
                //     ]
           // dd($user);
        //    if($user){
        //     echo"<h1>Data Successfully Added.</h1>";
        //    }else{
        //     echo"<h1>Data not Added.</h1>";
        //    }
        
    
    
    // if (!$user) {
    //     return abort(404, 'User not found'); // Handle if user doesn't exist
    // }
    // return view('singleuser', compact('user')); // Pass data to the view

        // $user = User::where('id', $id)->first(); // Fetch single user by ID
        // return response()->json($user); // Return as JSON
    // }
    
    // }











    // Fetch all users
//     public function getAllUsers() {
//         $projects = DB::table('users')->get();
//         return response()->json($users);
//     }

//     // Fetch a single use
//     public function getUserById($id) {
//         $project = DB::table('users')->where('id', $id)->first();
//         return response()->json($user);
//     }

//     // Insert a new user
//     public function createProject(Request $request) {
//         DB::table('projects')->insert([
//             'name' => $request->name,
//             'description' => $request->description,
//             'budget' => $request->budget,
//             'status' => $request->status ?? 'pending',
//             'created_at' => now(),
//             'updated_at' => now()
//         ]);

//         return response()->json(['message' => 'Project created successfully']);
//     }

//     // Update a project
//     public function updateProject(Request $request, $id) {
//         DB::table('projects')
//             ->where('id', $id)
//             ->update([
//                 'name' => $request->name,
//                 'description' => $request->description,
//                 'budget' => $request->budget,
//                 'status' => $request->status,
//                 'updated_at' => now()
//             ]);

//         return response()->json(['message' => 'Project updated successfully']);
//     }

//     // Delete a project
//     public function deleteProject($id) {
//         DB::table('projects')->where('id', $id)->delete();
//         return response()->json(['message' => 'Project deleted successfully']);
//     }
// }
