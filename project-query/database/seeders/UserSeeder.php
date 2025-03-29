<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate(); // Clears existing data

        User::insert([
            ['name' => 'Yahoo Baba', 'email' => 'yahoobaba@gmail.com', 'age' => 20, 'city' => 'Delhi'],
            ['name' => 'Salman Khan', 'email' => 'salman@gmail.com', 'age' => 21, 'city' => 'Mumbai'],
            ['name' => 'Abhishek Bachan', 'email' => 'abhishek@gmail.com', 'age' => 18, 'city' => 'Goa'],
            ['name' => 'Shahid Kapoor', 'email' => 'shahid@gmail.com', 'age' => 17, 'city' => 'Delhi'],
            ['name' => 'John Abraham', 'email' => 'john@gmail.com', 'age' => 17, 'city' => 'Chandigarh'],
            ['name' => 'Amir Khan', 'email' => 'amir@gmail.com', 'age' => 19, 'city' => 'Chennai'],
            ['name' => 'Hrithik Roshan', 'email' => 'hrithik@gmail.com', 'age' => 20, 'city' => 'Mumbai'],
            ['name' => 'Akshay Kumar', 'email' => 'akshay@gmail.com', 'age' => 21, 'city' => 'Goa'],
        ]);
    }
}
