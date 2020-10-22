<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    public function agences()
    {
        return $this->belongsToMany(User::class);
    }
    public function admin()
    {
        return $this->hasMany(Admin::class,'admin_id','id');
    }
    public function chambres()
    {
        return $this->belongsToMany(Chambre::class);
    }
}
