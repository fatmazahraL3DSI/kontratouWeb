<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function admin()
    {
        return $this->hasMany(Admin::class,'admin_id','id');
    }
    public function agences()
    {
        return $this->belongsToMany(User::class);
    }
}
