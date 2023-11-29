<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index() {
        $isTeacher = User::with('UserRole')->whereRelation('UserRole', 'role_id', '=', 2)->find(Auth::user()->id);
        dd(isset($isTeacher));
        return view('home', compact('userDataNav', 'isTeacher'));
    }
}
