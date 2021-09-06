<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('form');
    }

    public function handler(Request $request)
    {
        $name = $request->name;
        $ishan=$request->up;
        $email =$request->email;
        $username = $request->username;
        $password = $request->password;
        $confirm = $request->confirm;
        if ($password != $confirm)
        {
            echo "<h1> Password's Do Not Match </h1>";
        }
        else
        {
            return view('dashboard',compact('username','ishan'));
        }
    }
}
