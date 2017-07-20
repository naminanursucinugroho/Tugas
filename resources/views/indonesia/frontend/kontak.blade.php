@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-8 col-sm-offset-2 maincontent">
                <header class="page-header">
                    <h1 class="thin text-center">HUBUNGI KAMI</h1>
                </header>
                
                <p>
                    Kami Sangat Berharap Anda Dapat Berbagi Kritik Dan Saran Untuk SMK Assalaam Bandung.
                </p>
                <br>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Telepon">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea placeholder="Ketikan Pesan Anda Disini.... " class="form-control" rows="9"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            
                            <div class="col-sm-12 text-right">
                                <input class="btn btn-primary btn-block" type="submit" value="Kirim Pesan">
                            </div>
                        </div>
                    </form>
            </article>
        </div><br><br><br>
        <div class="row">
            <article class="col-sm-8 col-sm-offset-2 maincontent">
                <header class="page-header">
                    <h1 class="thin text-center">LAMARAN KERJA</h1>
                </header>
                
                <p>
                    Anda Dapat Mengirimkan Langsung Lamaran Kerja Disini, Semua Persyaratan Yang Dibutuhkan Haruslah Berbentuk ZIP. Beri Kami Waktu Untuk Memberikan Jawaban Pada Anda.
                </p>
                <br>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" placeholder="Telepon">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input class="btn btn-primary btn-block" type="submit" value="Kirim Lamaran">
                            </div>
                        </div>
                    </form>

            </article>
            <!-- /Article -->
        </div>
    </div>  <!-- /container -->
@endsection