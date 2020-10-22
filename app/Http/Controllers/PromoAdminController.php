<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\Promo;
use Session;

class PromoAdminController extends Controller
{
    public function promos(){
        $promos = Promo::all();
        return $promos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all();
        return view('admin.promo.liste_promo')->with('promos',$promos);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $promos = Promo::pluck('id');
       return view('admin.promo.add_promo')->with('promos',$promos);
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=Auth::user();
        $promo = new Promo;
        $promo->admin_id=$admin->id;
        $promo->Titre=$request->input('Titre');
        $promo->date_deb=$request->input('date_deb');
        $promo->date_fin=$request->input('date_fin');
        $promo->prix=$request->input('prix');
        $promo->save();
        return redirect('admin/liste_promo');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data=Auth::user();
      $promo=Promo::find($id);
      return view('admin.promo.promo_detail',compact('promo','data'));
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
        $admin=Auth::user();
        $promo = Promo::find($id);
        $promo->id=$id;
        $promo->admin_id=$admin->id;
        $promo->Titre=$request->input('Titre');
        $promo->date_deb=$request->input('date_deb');
        $promo->date_fin=$request->input('date_fin');
        $promo->prix=$request->input('prix');
        $promo->save();
        Session::flash('message', 'Promotion modifier avec succee');
        return redirect('admin/liste_promo');
        
    }
    public function edit($id)
    {
        $promo = Promo::find($id);
        $admin=Auth::user();
        return view('admin.promo.promo_edit')->with('promo',$promo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();
        Session::flash('message', 'Promotion supprimer avec succee');
        return redirect('admin/liste_promo');
        
    }
}
