@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br><br><br><br><br><br><br><br>
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12" ><br>
                            <div class="col-md-10">
                            <h2 class="panel-title"><b>HAK AKSES WEBSITE SMK ASSALAAM</b></h2>
                            </div>
                            <div class="col-md-2">
                            <a href="{{ url('/admin/hak-akses/create') }}" class="btn btn-primary">Tambah Akun</a>
                            </div>

                        </div>
                       
                    </div>
                </div>
                <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>  
                        <th><center>No</center></th>
                        <th><center>Nama Pengguna</center></th>
                        <th><center>Alamat Email</center></th>
                        <th colspan="2"><center>Opsi</center></th>
                    </tr> 
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                    @foreach($member as $a)
                    <tr>
                        <td><center>{{ $no }}</center></td>
                        <td><center>{{ $a->name }}</center></td>
                        <td><center>{{ $a->email }}</center></td>
                        @if($a->id != 1)
                        <td><center><a href="{{ route('hak-akses.edit',$a->id) }}" class="btn btn-warning btn-xs">Ubah</a></center></td>
                        <td><center><a href="{{ route('hak-akses.destroy',$a->id) }}" class="btn btn-danger btn-xs">Hapus</a></center></td>
                        @endif 
                        @if($a->id == 1)
                        <td><center><a href="{{ route('hak-akses.edit',$a->id) }}" class="btn btn-warning btn-xs">Ubah</a></center></td>
                        <td><center><a href="{{ route('hak-akses.destroy',$a->id) }}" class="btn btn-default btn-xs">Hapus</a></center></td>
                        @endif 
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection