<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPanel(Request $request){

        return view('admin.panel');
    }

    public function usersPage(){
        return view('admin.user.all');
    }
}
