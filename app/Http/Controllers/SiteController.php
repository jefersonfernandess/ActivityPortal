<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index() {
        $userDataNav = Auth::user();
        return view('home', compact('userDataNav'));
    }
}
