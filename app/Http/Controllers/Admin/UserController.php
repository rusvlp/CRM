<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUser(){
        $roles = User::getRoles();

        return view('admin.user.add', ['roles' => $roles]);
    }

    public function createUser(Request $request){

        $password_confirmation = $request -> password_confirmation;

        if ($request -> password != $password_confirmation){
            return view('admin.user.add', ['password_error' => true]);
        }

        if (User::where('email', '=', $request -> email) -> exists()){
            return view('admin.user.add', ['email_error' => true]);
        }



        $user = User::create([
            'first_name' => $request-> first_name,
            'last_name' => $request -> last_name,
            'middle_name' => $request -> middle_name,
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),

        ]);

        return redirect('/admin/users');
    }
}
