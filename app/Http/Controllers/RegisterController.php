<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
         return view('register.register');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8', // minimal 8 karakter
                'regex:/[a-z]/', // harus ada huruf kecil
                'regex:/[A-Z]/', // harus ada huruf besar
                'regex:/[0-9]/', // harus ada angka
                'regex:/[@$!%*#?&]/', // harus ada simbol
            ],
            'password_confirmation' => 'required|same:password',
            'birth_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->birth_date = $request->input('birth_date');
        $user->save();

        return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    }
}
