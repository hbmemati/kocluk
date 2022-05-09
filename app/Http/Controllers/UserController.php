<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return view('user.index');
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->image = $request->avatar;
        $user->save();

        return redirect()->route('user.index');

    }


}
