<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categori_divisi extends Model
{
    //

    protected $table = 'categori_divisis';
    protected $fillable = ['id','nama_divisi'];


    public function users(){
      return $this->hasMany('App\User');
    }



}
