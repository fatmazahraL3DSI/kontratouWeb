<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    public function admin()
    {
        return $this->hasMany(Admin::class,'admin_id','id');
    }
    public function contrat()
    {
        return $this->hasMany(Contrat::class,'contrat_id','id');
    }
}
