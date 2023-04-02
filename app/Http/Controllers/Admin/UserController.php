<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUser(){
        return view('admin.user.add');
    }

    public function createUser(Request $request){
        $user = User::create([
            'first_name' => $request-> first_name,
            'last_name' => $request -> last_name,
            'middle_name' => $request -> middle_name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/users');
    }
}
