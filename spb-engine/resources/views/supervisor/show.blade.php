@extends('layouts.default')
@section('header_style')

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


  <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Tampil Data<a href="{{url('spb')}}" class="btn btn-primary pull-right">Kembali</a></h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="get" action="">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="validate_firstname" required  disabled>
                              <span class="bar"></span>
                              <label>ID</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_lastname" name="validate_lastname" required value="" disabled>
                              <span class="bar"></span>
                              <label>NAMA</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Jenis Permintaan</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>NAMA ITEM</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Unit/Satuan</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Harga</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Keterangan</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required value="" disabled>
                              <span class="bar"></span>
                              <label>Tanggal</label>
                            </div>

                          </div>

                          <div class="col-md-6">
                            @foreach ($detail as $detailss)
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->id_prmtn}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->name}}</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_email" name="validate_email" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->nm_jnprmtn}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->divisi_id}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->nm_item}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->unit_satuan}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->item_harga}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->keterangan}}</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required disabled>
                              <span class="bar"></span>
                              <label>{{$detailss->create_at}}</label>
                            </div>

                          @endforeach
                          </div>
                      </form>
                      <form class="cmxform" action="{{url('supervisor.update',$detailss->id_prmtn)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                          <div class="col-md-12">


                            <select name="spv" class="form-control input-lg " required>
                              <option value="">Action</option>
                              @foreach ($setuju as $yy)
                              <option value='{{$yy->id}}'>{{$yy->nama}}</option>
                              @endforeach
                            </select>

                            <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                              <input type="checkbox" class="checkbox"  id="validate_agree" name="validate_agree">
                              <label>Please agree to our policy</label>
                            </div>
                            {{-- <bug class="submit btn btn-danger" type="submit" value="Submit"> --}}
                            <button type="submit" class="btn btn-round btn-primary pull-right">Simpan</button>

                        </div>
                      </form>


                    </div>
                  </div>
                </div>
              </div>
@endsection
@section('script')

@endsection
