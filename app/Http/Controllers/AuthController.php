<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login_index(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required']);


        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('index');
        }
        else {
            return redirect()->back()->withInput($request->only('email'));
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
    public function register_index(Request $request)
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'name' => 'required',
            'surname' => 'required',

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type_id = $request->has('type') ? 2: 3;;
        $user->save();

        return redirect()->route('login.index');


    }

}
