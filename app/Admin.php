<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','etat','logo' ,'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function agences()
    {
        return $this->belongsToMany(User::class);
    }
    public function promos()
    {
        return $this->belongsToMany(Promo::class);
    }
    public function chambres()
    {
        return $this->belongsToMany(Chambre::class);
    }
    public function contrats()
    {
        return $this->belongsToMany(Contrat::class);
    }
    public function reclamaton()
    {
        return $this->hasMany(Reclamation::class);
    }
}
