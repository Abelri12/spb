@extends('layouts.default')
@section('header_style')

@endsection

@section('content1')

 <h3>awiaddaodaodwajadodi</h3>


@endsection
@section('content2')
  <h3>ini tempat supervisor</h1>
    <div class="row">
      <div class="panel panel default">
        <div class="panel-heading">

            <h3>Daftar Pengajuan<a href="{{url('create')}}" class="btn btn-primary pull-right">Tambah</a></h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Permintaan</th>
                  <th>Divisi</th>
                  <th>Tanggal</th>
                  <th>NM B/J</th>
                  <th>Unit/satuan</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Aprove1</th>
                  <th>Aprove2</th>
                  <th>Cangge</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($tampil as $list)


                <tr>
                  <td>{{$list->id_prmtn}}</td>
                  <td>{{$list->name}}</td>
                  <td>{{$list->email}}</td>
                  <td>{{$list->nm_jnprmtn}}</td>
                  <td>{{$list->nama_divisi}}</td>
                  <td>{{$list->creat_at}}</td>
                  <td>{{$list->nm_item}}</td>
                  <td>{{$list->unit_satuan}}</td>
                  <td>{{$list->item_harga}}</td>
                  <td>{{$list->keterangan}}</td>

                  <td><span class="label label-success">Success</span></td>
                  <td><span class="label label-warning">Pending</span></td>
                  <form class="" action="" method="post">
                    <td><a href="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="Hapus"><span class=" glyphicon glyphicon-trash"></span></a>
                  </form>

                  </td>
              </tr>
                @endforeach
              </tbody>
            </table>

            <div class="col-md-6">
              {{-- {{$tampil->links()}} --}}

    </div>


@endsection
@section('script')

@endsection
