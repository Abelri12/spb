@extends('layouts.default')
@section('header_style')


  <!-- plugins -->


  <link rel="stylesheet" href={{asset('asset/datepiker/css/bootstrap-datepicker3.css')}}>
  <!-- end: Css -->

  <link rel="shortcut icon" href={{asset('asset/img/logomi.png')}}>
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
    @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach

      </div>

    @endif
    @if (\Session::get('success'))
        <div class="alert alert-success">
          <p>{{\Session::get('success')}}</p>

        </div>
    @endif

    <div class="form-element">
      <div class="col-md-12 padding-0">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading">
             <h4>Basic Element bu </h4>

            </div>
             <div class="panel-body" style="padding-bottom:30px;">
              <div class="col-md-12">
                {{--awal form  --}}
                <form class="form-horizontal" action="{{URL('store')}}" method="post">
                   {{ csrf_field() }}
                  <fieldset>
                    <div class="form-group" padding-2><label class="col-sm-2 control-label text-right">Nama</label>
                      <div class="col-sm-10"><input type="text" class="form-control primary" name="nama"></div>
                    </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Permintaan</label>
                        <div class="col-sm-10 padding-top-5">
                            <select class="form-control primary" placeholder="Pilih Satu Tipe" name="jenis_permintaan">

                              <option value="">Jenis Permintaan</option>
                              @foreach($tampiljenispermintaan as $jenis)
                                  <option value=''>{{ $jenis->nm_jnprmtn }}</option>
                              @endforeach
                            </select>


                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Divisi</label>
                        <div class="col-sm-10"><input type="text" class="form-control primary" name="divisi"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Barang/Jasa</label>
                        <div class="col-sm-10"><input type="text" class="form-control primary" name="nama_barang"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Unit Satuan</label>
                        <div class="col-sm-10"><input type="text" class="form-control primary" name="satuan"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Harga</label>
                        <div class="col-sm-10"><input type="password" class="form-control primary" name="harga"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal</label>
                        <div class="col-sm-10"><input type="text" name="tanggal" id="tanggal"class="form-control primary" placeholder=""></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Di Tunjukan</label>
                        <div class="col-sm-10"><input type="text" class="form-control primary" name="ditunjukan"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label text-right">Keterangan</label>
                        <div class="col-sm-10"><textarea class="form-control primary" name="keterangan" rows="8" cols="40" placeholder="Masukan Komentar" ></textarea></div>
                     </div>
                     <br>
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
                      format: "yyyy/mm/dd",
                      autoclose:true
                  });

              });
          </script>
@endsection
