<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMK Assalaam') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/gt.png') }}">

    <link rel="stylesheet" href="{{ asset('table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('table/css/dataTables.bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/selectize.bootstrap3.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="home">
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/smk.png') }}" alt="Smk Assalaam"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    @role('admin')
                        <li><a href="{{ url('/home') }}">Beranda</a></li>
                        <li><a href="{{ route('hak-akses.index') }}">Hak Akses</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Profil Sekolah</a></li>
                            <li><a href="">Kejuruan</a></li>
                            <li><a href="">Fasilitas</a></li>
                            <li><a href="">Ekstrakurikuler</a></li>
                        </ul>
                        </li>
                        <li><a href="">Prestasi</a></li>
                        <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('kejuruan')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kejuruan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Rekayasa Perangkat Lunak</a></li>
                            <li><a href="">Teknik Sepeda Motor</a></li>
                            <li><a href="">Teknik Kendaraan Ringan</a></li>
                        </ul>
                        </li>
                        <li><a href="">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('ekskul')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekstrakurikuler <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Rekayasa Perangkat Lunak</a></li>
                            <li><a href="">Teknik Sepeda Motor</a></li>
                            <li><a href="">Teknik Kendaraan Ringan</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('fasilitas')
                        <li><a href="">Beranda</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Gedung</a></li>
                            <li><a href="">Lingkungan</a></li>
                            <li><a href="">Ruang Praktek</a></li>
                        </ul>
                        </li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @role('artikel')
                        <li><a href="">Beranda</a></li>
                        <li><a href="{{ route('artikel.index') }}">Berita</a></li>
                        <li><a href="{{ url('akun/profile') }}">Akun</a></li>
                        <li><a class="btn" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >LOGOUT</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endrole
                    @if (Auth::guest())
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sekolah <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/profil') }}">Profil Sekolah</a></li>
                            <li><a href="{{ url('/kejuruan') }}">Kejuruan</a></li>
                            <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                            <li><a href="{{ url('/ekstra') }}">Ekstrakurikuler</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
    
    @yield('content')
    
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4 widget">
                        <h3 class="widget-title">Kontak</h3>
                        <div class="widget-body">
                            <p>+022 5120 2240<br>
                                <a href="mailto:#">smk@smkassalaambandung.sch.id</a><br>
                                <br>
                                Jl. Situtarate - Terusan Cibaduyut, Bandung
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Ikuti Kami</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-youtube fa-2"></i></a>
                                <a href=""><i class="fa fa-instagram fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-5 widget">
                        <h3 class="widget-title">Tentang Sekolah</h3>
                        <div class="widget-body">
                            <p>Anda dapat mengikuti berbagai macam kegiatan dan informasi mengenai SMK Assalaam Bandung melalui media sosial. Ataupun anda dapat berkomunikasi langsung dengan kami melalui kontak yang tersedia di website ini. Kunjungi SMK Assalaam, <b><i>Lihat</i></b> dan <b><i>Bandingkan !!</i></b></p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="{{ url('/') }}">Beranda</a> |
                                <a href="{{ url('/berita') }}">Berita</a> |
                                <a href="{{ url('/kontak') }}">Kontak</a> |
                                <b><a href="{{ url('/login') }}">Masuk</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2017, Dibuat Oleh Nopi Latipah & Nursuci Nugroho <a href="" rel="designer">SMK Assalaam Bandung</a> 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('table/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="/js/custom.js"></script>
    @yield('scripts')
</body>
</html>