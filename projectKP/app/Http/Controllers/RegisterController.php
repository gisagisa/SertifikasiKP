<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', ["siteTitle" => 'Register']);
    }

    public function store(Request $request){
        
        $validatedData=$request->validate([
        'username' => 'required|min:5|max:255',
        'email' => 'required|unique:user|email',
        'password' => 'required|min:5|max:50'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');

    }
}