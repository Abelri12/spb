<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Permintaan;
use App\ItemPermintaan;
use App\JenisPermintaan;
use App\Persetujuan;


class SupervisorController extends Controller
{
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
          ->where('users.divisi_id','=',$cuser)
          ->orderby('tb_prmtn.id_prmtn','desc')
          ->paginate(3);

         // dd($tampil);
         // $tampiljenis = DB::table('JenisPermintaan')


      return view('supervisor.index',compact('tampil'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $list = Permintaan::find($id);
         // $list = Permintaan::where('id_prmtn',$id)->firstOrFail();
        // $list = Permintaan::where($id,'like', '%$id%')->with('ItemPermintaan')->get();
          // dd($permintaan);
        // $list->ItemPermintaan()->where('id_item',$id)->get();

        $detail = Permintaan:: leftJoin('users', 'users.id', '=', 'tb_prmtn.user_id')
                  ->join('categori_divisis','users.divisi_id','=','categori_divisis.id')
                  ->join('tb_itemprmtn','tb_itemprmtn.id_item','=','tb_prmtn.itemprmtn_id')
                  ->join('tb_jnprmtn', 'tb_jnprmtn.id_jnprmtn', '=', 'tb_prmtn.jnprmtn_id')
                  ->join('tb_persetujuan','tb_persetujuan.id','=','tb_prmtn.spv')
                  ->where('id_prmtn','=',$id)
                  ->get();
      $setuju = Persetujuan::all();



         //dd($setuju);


        return view('supervisor.show',compact('detail','setuju'));
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
        $setuju = Permintaan ::find($id);
        $setuju ->spv = $request['spv'];
        // dd($setuju);
        $setuju ->save();

        return redirect('spb');
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

    }
}
