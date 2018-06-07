<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persetujuan extends Model
{
    //
    protected $table = 'tb_persetujuan';
    protected $fillable = ['id','nama'];
    protected $primaryKey = 'id';


    public function Permintaan(){
      return $this->hasMany('App\Permintaan');
    }
}
