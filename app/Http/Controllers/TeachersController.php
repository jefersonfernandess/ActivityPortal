<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachersController extends Controller
{
    public function index() {
        $userDataNav = Auth::user();
        $userData = User::with('UserRole')->whereRelation('UserRole', 'role_id', '=', 2)->get();
        return view('teacher.index', compact('userData', 'userDataNav'));
    }   
}
