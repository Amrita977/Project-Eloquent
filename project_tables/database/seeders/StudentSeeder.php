<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $json = File::get(path:'database/json/students.json');
        $students = collect(json_decode($json));
        
        $students->each(function($students){
        $students::create([
            'name' =>$students->name,
            'email' => $students->email,
            'age'=> $students->age,
            'city'=>$students->city,
        ]);
    });
}
}