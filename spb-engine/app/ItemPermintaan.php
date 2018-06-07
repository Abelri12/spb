<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPermintaan extends Model
{
    //
    protected $table ='tb_itemprmtn';
    protected $primaryKey = 'id_item';
    protected $fillable = ['id_item','user_id','nm_item','unit_satuan','item_harga','keterangan',
                            'create_at','create_date'];


    public $timestamps = false;


    public function User(){

      return $this->belongsTo('App\User');
    }
    public  function Permintaan(){
      return $this->hasMany('App\Permintaan');
    }


}
