<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }
    
    public function registerStore(RegisterFormRequest $request) {
        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            
        UserRole::create([
            'user_id' => $user->id,
            'role_id' => 2
        ]);     

        return redirect()->route('login.index');
    }
}
