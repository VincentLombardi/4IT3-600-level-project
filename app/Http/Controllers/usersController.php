<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usersController extends Controller
{
    function showusers() {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }
}
