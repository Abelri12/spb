<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    //
    protected $table = 'tb_prmtn';
    protected $primaryKey = 'id_prmtn';
    protected $fillable =['id_prmtn','user_id','create_at','jnprmtn_id'];

      public $timestamps = false;



    public function User(){
      return $this->belongsTo('App\User');
    }
    public function ItemPermintaan(){
      return $this->belongsTo('App\ItemPermintaan');
    }
    public function Persetujuan(){
      return $this->belongsTo('App\Persetujuan');
    }
}
