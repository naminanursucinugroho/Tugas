@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">


        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"></h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 class="thin text-center"><b>PENGATURAN AKUN</b></h3>
                            <hr>
                            <center>
                            <h4><b>Nama Pengguna</b></h4>  
                            <h5>{{ auth()->user()->name }}</h5>
                            <br>
                            <h4><b>Alamat Email</b></h4> 
                            <h5>{{ auth()->user()->email }}</h5>
                            </center>  
                            <hr>
                            <div class="form-group">
                            	<div class="col-sm-6 text-left">
                                    <a class="btn btn-warning" href="{{url('/akun/password')}}">Ubah Password</a>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a class="btn btn-primary" href="{{url('/akun/profile/edit')}}">Ubah Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection