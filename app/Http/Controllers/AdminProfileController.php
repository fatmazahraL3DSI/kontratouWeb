<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        $a = $users->count();
        return view('admin.profil.profil', ['a' => $a,'users'=>$users]);  ;
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Auth::user();
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo') ){
            $destination='public/images';
            $filename1=$request->logo->getClientOriginalName();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->tel = $request->tel;
            $admin->adresse = $request->adresse;            
            $admin->representant = $request->representant;
            $admin->logo = $request->logo->getClientOriginalName();
          $admin->save();
          $request->file('logo')->move($destination,$filename1);
          Session::flash('message', "L'hôtel a été mis à jour!");
          return redirect()->route('admin.profil.profil');
    }else{
        Session::flash('message', "L'hôtel ne pas mis à jour!");
        return redirect()->route('admin.profil.profil');
    }
}
}
