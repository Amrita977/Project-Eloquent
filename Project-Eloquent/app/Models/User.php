<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Import this
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    use HasFactory;
     
    public $timestamps = false;
    // protected $guarded= [];
    protected $fillablec=['name','email','age','city'];
}
