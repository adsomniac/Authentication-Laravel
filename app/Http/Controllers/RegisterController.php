<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request){
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi data
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Memasukkan ke db
        User::create($validatedData);

        // Flash message registrasi berhasil
        $request->session()->flash('success', 'Registration succesfully! Please Login');



        // Mendirect halaman ke login
        return redirect('/login');

    }
}
