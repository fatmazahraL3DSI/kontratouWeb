<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\User;
use Session;

class ListHotelsController extends Controller
{
   
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        return view('hotels.list',compact('admins','users'));

        
    } 
    public function demande($id){
        $admins = Admin::pluck('id');
        $user = Auth::user();
        $user->demande="vrais";
        return view('hotels.list',compact('admins','user'));

    }
    
    
}
