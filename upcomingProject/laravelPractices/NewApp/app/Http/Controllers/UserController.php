<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     $users = User::all();
    //     return view('laravel-examples.users-management', compact('users'));
    // }

    public function index()
    {
        try {
            return view('dashboard');
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()]);
        }
    }
}
