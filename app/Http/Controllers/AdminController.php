<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit','Agences']);
    }
    public function hotels(){
        $admins = Admin::all();
        return response()->json($admins, 200);
       
    }
    public function agences(){
        $admins = User::all();
        return response()->json($admins, 200);
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'email'         => 'required',
          'password'      => 'required',
          'etat'      => 'required',
          'logo'      => 'required',

        ]);
        if($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStore);
            } else {
             $fileNameToStore = 'unnamed.jpg';
            }
          
        // store in the database
        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->etat = $request->etat;
        $admins->logo = $fileNameToStore;
        $admins->password=bcrypt($request->password);
        $admins->save();
        return redirect('admin/dashboard');
     //  return redirect()->route('admin.auth.login');
    }
    public function login(Request $request){
        $admin= new Admin;
        $adminExist= new Admin;
        $admin->email = $request->email;
        $admin->password =$request->password;
        $adminExist=Admin::where(array('email' => $admin->email, 'password' => $admin->password ))->get();
        if($adminExist->isNotEmpty())
        {return response()->json(['success' => true, 'id' => $adminExist->first()->id, 'email'=>$adminExist->first()->email,"password"=>$adminExist->first()->password], 200);}
        else
        {return response()->json(['success' => false,'id' => '0'], 202);}
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
        //
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
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
   
    
}
