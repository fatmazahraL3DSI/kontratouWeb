<?php

namespace App;
use App\Agence;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{ 
    

    public function agence()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
}
