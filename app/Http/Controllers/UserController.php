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
        if (Auth::user() && Auth::user()->function == 'Admin')  {
            return view('admin/admin',
                ['users' => User::orderBy('id', 'asc')->get(), ]);
        }
        elseif (Auth::user() && Auth::user()->function == 'admin')  {
            return view('admin/admin',
                ['users' => User::orderBy('id', 'asc')->get(), ]);
        }
        else {
            return redirect('/');
        }
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

    public function edit($id)
    {

        $user = User::find($id);


        return View('admin/edit')
            ->with('user', $user);
    }

    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);


        // store
        $user = User::find($id);
        $user->name       = Input::get('name');
        $user->email      = Input::get('email');
        $user->save();

        // redirect
        Session::flash('message', 'Successfully updated user!');
        return Redirect::to('admin');
    }
    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the User!');
        return Redirect::to('admin');
    }
}

