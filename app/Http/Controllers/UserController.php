<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    public function show($id)
    {
        return view('profile.show', [
            'user' => User::findOrFail($id),
        ])  ;
    }

    public function index()
    {
        return view('profile/index', [
            'users' => User::orderBy('id', 'asc')->get(),
        ]);
    }
}