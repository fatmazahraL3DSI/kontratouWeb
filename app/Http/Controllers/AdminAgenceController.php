<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAgenceController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
