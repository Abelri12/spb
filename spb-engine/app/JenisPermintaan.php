<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPermintaan extends Model
{
    //
    protected $table = 'tb_jnprmtn';
    protected $primarykey = 'id_jnprmtn';

    protected $fillable = ['id_jnprmtn','user_id','nm_jnprmtn','create_at'];

    public function User(){
      return $this->belongsTo('App\User');
    }
}
