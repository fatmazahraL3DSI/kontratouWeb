<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contrat;
use App\Admin;
use App\Chambre;
use Session;
class AdminChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambres = Chambre::all();
        return view('admin.chambre.lister_chambre')->with('chambres',$chambres);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $chambre = Chambre::pluck('id');
       return view('admin.chambre.add_chambre')->with('chambre',$chambre);
      
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
      $chambre=Chambre::find($id);
      return view('admin.chambre.chambre_detail',compact('chambre','data'));
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
       // $contrat= Contrat::pluck(1);
        $chambre = new Chambre;
        $chambre->admin_id=$admin->id;
        $chambre->contrat_id=1;
        $chambre->numch=$request->input('numch');
        $chambre->categorie=$request->input('categorie');
        $chambre->disponibilite=$request->input('disponibilite');
        $chambre->save();
        return redirect('admin/chambre');
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
        $chambre = Chambre::find($id);
        $chambre->admin_id=$admin->id;
        $chambre->contrat_id=1;
        $chambre->numch=$request->input('numch');
        $chambre->categorie=$request->input('categorie');
        $chambre->disponibilite=$request->input('disponibilite');
        $chambre->save();
        Session::flash('message', 'Chambre modifier avec succee');
        return redirect('admin/chambre');        
    }
    public function edit($id)
    {
        $chambre = Chambre::find($id);
       
        return view('admin.chambre.edit_chambre')->with('chambre',$chambre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chambre = Chambre::find($id);
        $chambre->delete();
        Session::flash('message', 'Chambre supprimer avec succee');
        return redirect('admin/chambre');
        
    }
}
