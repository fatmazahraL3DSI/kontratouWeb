<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;

use Session;

class AgenceController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::all();  
            return view('admin.liste_agences')->with('users',$users);  
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
       $users = User::find($id);
       $admins= Auth::user();
       return redirect('admin/liste_agences_accepter',compact('admins','users'));
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=new User;
      $user->demande=$request->valide;
      $user->demande=$request->demande;
      $user->name=$request->name;
      $user->point=$request->point;
      $user->logo=$request->logo;
      $user->email=$request->email;
      $user->email=$request->email;
      $user->save();
      Session::flash('message', "L'agence accepter");
      $admin =$request->admin_id;
      $user->hotels()->attach($admin);
      $agence =$request->user_id;
      $user->tags()->attach($agence);
      return redirect()->route('admin.contrat');
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
    public function accepterAgence (Request $request,$id){
        $user = User::find($id);
        $admins= Auth::user();
       // $user->demande="vrais";
      //  $user->valide="oui";
        $user->save();
        Session::flash('message', "L'agence accepter");
         $admin =$admins->id;  
         $agence = $user->id;
        // $user->hotels()->attach($admin);
         $admins->agences()->attach($agence);
        return redirect('admin/liste_agences_accepter')->with('user',$user);
    }
}
