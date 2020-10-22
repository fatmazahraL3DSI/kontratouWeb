<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        return view('dashboard',compact('admins','users'));

        //return view('home')->with('admins',$admins);
    }
    /*public function demande()
    {
        $admins = Admin::all();
        $users = User::all();
        

        
    }*/
    
}
