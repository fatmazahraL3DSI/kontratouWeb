<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ContratAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function index()
    {
        $users = User::all();
        return view('admin.contrat')->with('users',$users);  ;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

}
