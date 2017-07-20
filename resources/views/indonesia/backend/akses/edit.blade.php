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
                             <h3 class="thin text-center"><b>UBAH AKUN</b></h3>
                            <hr>
                            {!! Form::model($member, ['url'=>route('hak-akses.update', $member->id), 'method'=>'put', 'files'=>'true','class'=>'form-horizontal']) !!}
                    @include('indonesia.backend.akses._form')
                    {!! Form::close() !!}
                            
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection