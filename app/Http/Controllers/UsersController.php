<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users() {
       $users = User::all();
        return view('users', compact('users'));
    }
}
