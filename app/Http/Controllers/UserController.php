<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Store user
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'string|max:255',
           'email' => 'string|email',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password');
        $user->save();

        return redirect('/users/index');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password');
        $user->save();

        return redirect('/users/index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users/index');
    }
}
