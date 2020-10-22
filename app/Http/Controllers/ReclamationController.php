<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\Reclamation;
use Session;

class ReclamationController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $reclamations = Reclamation::all();
        return view('admin.reclamation.tout_reclamation')->with('reclamations',$reclamations);;
    }
    
}
