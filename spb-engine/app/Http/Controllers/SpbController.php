<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use App\User;
use App\Permintaan;
use App\ItemPermintaan;
use App\JenisPermintaan;


use App\Http\Controllers\Controller;

class SpbController extends Controller
{

    protected $pesan= [

        'jenis_permintaan.required'=>'isi jenis permintaan',
        'nama_barang.required'=>'isi nama barang',
        'satuan.required'=>'isi satuan',
        'harga.required'=>'isi harga',
        // 'tanggal.required'=>'isi tanggal',
        'keterangan.required'=>'isi keterangan',


    ];
    protected $aturan = [

      'jenis_permintaan'=>'required',
      'nama_barang'=>'required',
      'satuan'=>'required',
      'harga'=>'required',
      // 'tanggal'=>'required',
      'keterangan'=>'required',



    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

      $this->middleware('auth');

    }




    public function index()
    {
      $cuser = Auth::user()->divisi_id;
      // dd($cuser);

      $tampil = Permintaan::leftJoin('users', 'users.id', '=', 'tb_prmtn.user_id')

          ->join('categori_divisis','users.divisi_id','=','categori_divisis.id')
          ->join('tb_itemprmtn','tb_itemprmtn.id_item','=','tb_prmtn.itemprmtn_id')
          ->join('tb_jnprmtn', 'tb_jnprmtn.id_jnprmtn', '=', 'tb_prmtn.jnprmtn_id')
          ->join('tb_persetujuan','tb_persetujuan.id','=','tb_prmtn.spv')
          ->where('users.divisi_id','=',$cuser)
          ->orderby('tb_prmtn.id_prmtn','desc')
          ->paginate(3);

          //dd($tampil);
         // $tampiljenis = DB::table('JenisPermintaan')


      return view('spb',compact('tampil'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      // $tampiltambah = User::all();
      $tampiljenispermintaan = JenisPermintaan::all();
      $tampilpermintaan = Permintaan::all();
      // $tampilpermintaan = \App\Models\Permintaan::with(['id_prmtn','itemprmtn_id'])->first();
      $itempermintaan = ItemPermintaan::all();


     //dd($tampilpermintaan);


      return view ('create',compact('tampiljenispermintaan','tampilpermintaan'));





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





              $this->validate($request, $this->aturan, $this->pesan);

              // $itprmtn -> id_prmtn =  Auth()->id;


              $isiitempermintaan = new ItemPermintaan;
              $isiitempermintaan -> nm_item = $request['nama_barang'];
              $isiitempermintaan -> unit_satuan= $request['satuan'];
              $isiitempermintaan -> item_harga = $request['harga'];
              $isiitempermintaan -> keterangan = $request['keterangan'];
              $isiitempermintaan -> create_at = $request['tanggal'];
              // $isiitempermintaan-> id_item;
              $isiitempermintaan->save();

              $isiitem = ItemPermintaan::All();

              ?>
              <?php foreach ($isiitem as $isi): ?>
                    <?php echo $isi->id_item ?>
              <?php endforeach; ?>
              <?php
              // dd($isi->id_item);






              //
              $isipermintaan = new Permintaan;
              $isipermintaan -> user_id = auth()->id();
              $isipermintaan -> jnprmtn_id = $request['jenis_permintaan'];
              // $isipermintaan -> itemprmtn_id = $request['id_item'];
              $isipermintaan -> itemprmtn_id = $isi->id_item;
              $isipermintaan -> spv = 3 ;
              //$isipermintaan -> id_item = DB::table('ItemPermintaan')->insertGetID(['id_item']);

              $isipermintaan->save();
              // dd($isipermintaan);
              return back()->withInput(compact('spb','isiitepermintaan'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $list = ItemPermintaan::find($id);
      // $permintaan = Permintaan::all();
      // $tampiljenispermintaan = JenisPermintaan::all();
      //
      //   // dd($permintaan);
      //  //dd($list);
      //
      //
      // return view('show',compact('list', 'permintaan','tampiljenispermintaan'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $permintaan = Permintaan::all();

        $tampiljenispermintaan = JenisPermintaan::all();
        $list = ItemPermintaan::find($id);
         //dd($tampiljenispermintaan);


        return view('edit',compact('list', 'permintaan','tampiljenispermintaan'));




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, $this->aturan, $this->pesan);
        $list = ItemPermintaan::find($id);
        $list -> nm_item = $request['nama_barang'];
        $list -> unit_satuan= $request['satuan'];
        $list -> item_harga = $request['harga'];
        $list -> keterangan = $request['keterangan'];

        $list->update();

        // flash()->success('item permintaanhas been update')
        return redirect ('spb');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = ItemPermintaan::findorFail($id);

        $item->delete();
        // dd($item);
        return redirect('spb');


    }
}
