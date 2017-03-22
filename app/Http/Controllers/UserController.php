<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Http\Requests\CreateUserFormRequest;

class UserController extends Controller
{

    public function show($id)
    {
        return view('profile.show', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function index()
    {
        return view('admin/admin', [
            'users' => User::orderBy('id', 'asc')->get(),
        ]);
    }

    public function store(CreateUserFormRequest $request)
    {
        $user = new User;

        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->function = $request->get('function');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->postal_code = $request->get('postal_code');
        $user->housenumber = $request->get('housenumber');
        $user->street = $request->get('street');
        $user->residence = $request->get('residence');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->username = $request->get('username');
        $user->password = bcrypt($request->get('password'));
        $user->password2 = bcrypt($request->get('password2'));

        $user->save();

        $request->session()->flash('alert-success', 'Gebruiker toegevoegd.');
        return redirect('/admin');

    }
}