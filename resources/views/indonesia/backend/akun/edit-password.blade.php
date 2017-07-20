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
                            {!! Form::open(['url'=>url('/akun/password'),'method'=>'post','class'=>'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password','Password Lama *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::password('password',['class'=>'form-control']) !!}
                            {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('new_password') ? 'has-error' : '' }}">
                        {!! Form::label('new_password','Password Baru *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::password('new_password',['class'=>'form-control']) !!}
                            {!! $errors->first('new_password','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('new_password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('new_password_confirmation','Konfirmasi Password Baru *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::password('new_password_confirmation',['class'=>'form-control']) !!}
                            {!! $errors->first('new_password_confirmation','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12" align="right">
                            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
						</div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection