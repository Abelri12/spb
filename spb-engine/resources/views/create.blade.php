@extends('layouts.default')
@section('header_style')


  <!-- plugins -->


  <link rel="stylesheet" href={{asset('asset/datepiker/css/bootstrap-datepicker3.css')}}>
  <!-- end: Css -->

  <link rel="shortcut icon" href={{asset('asset/img/logomi.png')}}>
@endsection
@section('header')

@endsection
@section('header_left')

@endsection
@section('content1')

  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
          <h3 class="animated fadeInLeft">Form Element</h3>
          <p class="animated fadeInDown">
            Form <span class="fa-angle-right fa"></span> Form Element
          </p>
      </div>


    </div>
  </div>


@endsection
@section('content2')
  <div class="row">


    <div class="form-element">
      <div class="col-md-12 padding-0">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading">
             <h4>Basic Element bu  <a href="{{'spb'}}" class="btn btn-primary pull-right">Kembali</a></h4>


            </div>
             <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-12">
                {{--awal form  --}}
                <form class="form-horizontal" action="{{URL('store')}}" method="POST">

                   {{ csrf_field() }}
                   @if ($errors->any())
                     <div class="alert alert-danger"><ul>
                       @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                       @endforeach

                     </li></div>

                   @endif
                   @if (\Session::get('success'))
                       <div class="alert alert-success">
                         <p>{{\Session::get('success')}}</p>

                       </div>
                   @endif
                  <fieldset>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-right">Jenis Permintaan</label>
                          <div class="col-sm-10 padding-top-20">
                            <select class="form-control primary" placeholder="Pilih Satu Tipe" name="jenis_permintaan" >

                                <option value="">---------Pilih Kategori------</option>

                                @foreach($tampiljenispermintaan as $jenis)
                                    <option value='{{$jenis->id_jnprmtn}}'>{{ $jenis->nm_jnprmtn }}</option>
                                @endforeach


                            </select>
                          </div>
                    </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label text-right">Nama Barang/Jasa</label>
                            <div class="col-sm-10"><input type="text" class="form-control primary" name="nama_barang" placeholder="Nama Barang Atau Jasa"></div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label text-right">Unit Satuan</label>
                            <div class="col-sm-10"><input type="text" class="form-control primary" name="satuan" placeholder="isi jumlah atau satuan"></div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label text-right">Harga</label>
                            <div class="col-sm-10"><input type="text" class="form-control primary" name="harga" placeholder="Masukan Harga" ></div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label text-right">Tanggal</label>
                            <div class="col-sm-10"><input type="text" name="tanggal" id="tanggal" class="form-control primary" placeholder="Masukan Tanggal Pembuatan"></div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label text-right">Keterangan</label>
                            <div class="col-sm-10"><textarea class="form-control primary" name="keterangan" rows="8" cols="40" placeholder="Masukan Komentar" ></textarea></div>
                     </div>
                     <br>
                     {{-- @foreach ($isiitem as $list)
                        <input type="tex" name="id_item" value="{{$list->id_item}}">
                     @endforeach --}}

                     <button type="submit" class="btn btn-round btn-primary pull-right">Simpan</button>


                  </fieldset>
                </form>
                {{--akhir form  --}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





@endsection
@section('script')
  <script src={{asset('asset/datepiker/js/bootstrap-datepicker.min.js')}}></script>
  <script type="text/javascript">
              // When the document is ready
              $(document).ready(function () {

                  $('#tanggal').datepicker({
                      format: "dd/mm/yyyy",
                      autoclose:true
                  });

              });
          </script>
@endsection
