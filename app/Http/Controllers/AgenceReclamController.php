<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\User;
use App\Reclamation;
use Session;
use Illuminate\Http\Request;

class AgenceReclamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user =Auth::user();
        $reclamations = Reclamation::all();
        return view('reclamation.historique_reclamattion')->with('reclamations',$reclamations);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=Auth::user();
      $reclamation= new Reclamation;
      $admins= Admin::all(['id', 'name']);
      foreach ($admins as $admin){
          if($admin->name==$request->name){
            $reclamation->admin_id=$admin->id;
          }
      }
      $reclamation->user_id=$user->id;
      $reclamation->Titre=$request->Titre;
      $reclamation->Description=$request->Description;
      $reclamation->save();
      Session::flash('message', "L'agence ajouter une reclamation");
      return redirect()->route('reclamation.historique_reclamattion');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $admins= Admin::all(['id', 'name']);
       $reclamation = Reclamation::pluck('id');
       return view('reclamation.ajouter_reclam',compact('reclamation'))->with('admins', $admins);
      
    }
    
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request,$id){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    
}
