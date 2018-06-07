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
    protected $table='users';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'email', 'password', 'divisi_id','level'
    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Categori_divisi() {
        return $this->belongsTo('App\Categori_divisi');
    }

    public function Permintaan(){
      return $this->hasMany('App\Permintaa','user_id');
    }
    public function ItemPermintaan(){
      return $this->hasMany('App\ItemPermintaan');
    }
    public function JenisPermintaan(){
      return $this->hasMany('App\JenisPermintaan');
    }







  }
