<?php 

namespace App\Http\Controllers;

use App\Models\Pomme;
use App\Http\Controllers\Controller;

class UserController 
{
    public function index () {
        return view('homepage');
    }
}