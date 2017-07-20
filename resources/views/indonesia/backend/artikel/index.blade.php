@extends('layouts.app')
@section('content')
    <div class="jumbotron top-space">
        <div class="container">
            <div align="right">
                <br><br><a href="{{ url('/admin/artikel/create') }}" class="btn btn-primary">Tambah Artikel Baru</a><br>
            </div><br>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel col-md-12">
                        <div class="post-slide col-md-12">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="{{ asset('assets/images/1.jpg') }}" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                            <p>
                                possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga. Dicta, nostrum nemo
                            </p>
                            <a href="" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection