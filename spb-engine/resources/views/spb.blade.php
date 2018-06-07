@extends('layouts.default')
@section('header_style')


  <!-- plugins -->


  <link rel="stylesheet" href={{asset('asset/datepiker/css/bootstrap-datepicker3.css')}}>
  <!-- end: Css -->

  <link rel="shortcut icon" href={{asset('asset/img/logomi.png')}}>
@endsection

@section('content1')
  <div class="col-md-6 col-sm-12">
    <h3 class="animated fadeInLeft">Customer Service</h3>
    <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Jakarta,Indonesia</p>

    <ul class="nav navbar-nav">
        <li><a href="" >Impedit</a></li>
        <li><a href="" class="active">Virtute</a></li>
        <li><a href="">Euismod</a></li>
        <li><a href="">Explicar</a></li>
        <li><a href="">Rebum</a></li>
    </ul>
</div>
<div class="col-md-6 col-sm-12">
    <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
      <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Jakarta</h3>
      <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
    </div>
    <div class="col-md-6 col-sm-6">
       <div class="wheather">
        <div class="stormy rainy animated pulse infinite">
          <div class="shadow">

          </div>
        </div>
        <div class="sub-wheather">
          <div class="thunder">

          </div>
          <div class="rain">
              <div class="droplet droplet1"></div>
              <div class="droplet droplet2"></div>
              <div class="droplet droplet3"></div>
              <div class="droplet droplet4"></div>
              <div class="droplet droplet5"></div>
              <div class="droplet droplet6"></div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('content2')
  <div class="row">
    <div class="panel panel default">
      <div class="panel-heading">

          <h3>Daftar Pengajuan<a href="{{url('create')}}" class="btn btn-primary pull-right">Tambah</a></h3>

      </div>

    <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-heading"><h3>Data Tables</h3></div>
                  <div class="panel-body">
                    <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        {{-- <th>Email</th> --}}
                        <th>Jenis Permintaan</th>
                        <th>Divisi</th>
                        <th>NM B/J</th>
                        <th>Unit/satuan</th>
                        <th>Harga</th>
                        {{-- <th>Keterangan</th> --}}
                        <th>Tanggal Pembuatan</th>
                        <th>SPV</th>
                        <th>Aprove2</th>
                        <th>Tampil</th>
                        <th>Ubah</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tampil as $list)


                      <tr>
                        <td>{{$list->id_prmtn}}</td>
                        <td>{{$list->name}}</td>
                        {{-- <td>{{$list->email}}</td> --}}
                        <td>{{$list->nm_jnprmtn}}</td>
                        <td>{{$list->nama_divisi}}</td>
                        <td>{{$list->nm_item}}</td>
                        <td>{{$list->unit_satuan}}</td>
                        <td>{{$list->item_harga}}</td>
                        {{-- <td>{{$list->keterangan}}</td> --}}
                        <td>{{$list->create_at}}</td>
                        @if($list->id == '1')
                                      <td><span class="label label-info">
                                          {{ $list->nama }}
                                       </span></td>
                            @elseif($list->id=='2')
                                      <td><span class="label label-warning">
                                          {{ $list->nama }}
                                       </span></td>
                            @else( $list->id =='3')
                                      <td><span class="label label-success">
                                          {{ $list->nama }}
                                       </span></td>
                          @endif

                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                          <a href="{{url('spb',$list->id_prmtn)}}"><span class="label label-success">SHOW</span></a>
                        </td>
                        <td>
                          <a href="{{url("$list->id_item/edit")}}" class="pull-center"><span class="glyphicon glyphicon-pencil"></span></a>

                        </td>
                        <td>
                          {!! Form::open(['method'=>'DELETE','action'=>['SpbController@destroy',$list->id_item]]) !!}
                          {!! Form::submit('delete',['class'=>'btn btn-danger btn-sm'])!!}
                          {!! Form::close() !!}

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">

                <div class="col-md-8">

                </div>

            </div>
            <div class="panel-heading">
                <h5 class="pull-right">{{$tampil->links()}}</h5>

                {{-- <h3>Daftar Pengajuan<a href="{{url('create')}}" class="btn btn-primary pull-right">Tambah</a></h3> --}}

            </div>
        </div>
    </div>



@endsection

@section('script')
  <!-- start: Javascript -->
<script src={{asset('asset/js/jquery.min.js')}}></script>
<script src={{asset('asset/js/jquery.ui.min.js')}}></script>
<script src={{asset('asset/js/bootstrap.min.js')}}></script>



<!-- plugins -->
<script src={{asset('asset/js/plugins/moment.min.js')}}></script>
{{-- <script src={{asset('asset/js/plugins/jquery.datatables.min.js')}}></script> --}}
{{-- <script src={{asset('asset/js/plugins/datatables.bootstrap.min.js')}}></script> --}}
<script src={{asset('asset/js/plugins/jquery.nicescroll.js')}}></script>


<!-- custom -->
{{-- <script src={{asset('asset/js/main.js')}}></script> --}}
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>

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
