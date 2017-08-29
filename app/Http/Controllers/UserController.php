<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return $user->toJson();
    }

    public function show($id)
    {
        $user = User::select('id', 'password')->find($id);
        if (!empty($user)) {
            return $user->toJson();
        } else {
            return json_encode([
                "error" => "User ID or password error"
            ]);
        }

    }
}
