<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'admin',
    ];



    public function offres(){
        return $this->hasMany('App\OffreEmplois', 'id_employer');
    }


    public function candidatures(){
        return $this->hasMany('App\Candidature', 'id_candidat');
    }
}
