@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead"><b>SMK ASSALAAM BANDUNG</b></h1>
                <p class="tagline">JL. SITUTARATE - TERUSAN CIBADUYUT BANDUNG - TERAKREDITASI <b>A</b></p>
            </div>
        </div>
    </header>
    <!-- /Header -->
<div class="container text-center">
        <br> <br>
        <h2 class="thin"><b>SELAMAT DATANG DI SITUS SMK ASSALAAM BANDUNG</b></h2>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <h3 class="text-center">PROGRAM KEAHLIAN SMK ASSALAAM BANDUNG</h3>
            
            <div class="row">
                <div class="col-md-4 col-sm-7 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Teknik Kendaraan Ringan</h4></div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Teknik Sepeda Motor</h4></div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Rekayasa Perangkat Lunak</h4></div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        
        <br><br>

        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('assets/images/1.png') }}">
            </div>
            <div class="col-sm-6">
                <h2>SAMBUTAN KEPALA SEKOLAH</h2>
                <p>
                    possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.
                </p>
            </div>
        </div> <!-- /row -->
    </div>  <!-- /container -->
    <div class="jumbotron top-space">
        <div class="container">
            <div class="header">
                <h3 class="text-center"><b>ARTIKEL TERBARU</b></h3>
                <br>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div id="news-slider" class="owl-carousel col-md-12">
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <br><br>
                        <div class="col-sm-10">
                        <button class="btn btn-block btn-lg">Baca Artikel Lainnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection