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
                            
                            {!! Form::model(auth()->user(),['url'=>url('/akun/profile'),'method'=>'post','class'=>'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name','Nama Pengguna *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                            {!! $errors->first('name','<p class="help-block">message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email','Alamat Email *',['class'=>'col-md-12']) !!}
                        <div class="col-md-12">
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                            {!! $errors->first('email','<p class="help-block">message</p>') !!}
                        </div>
                    </div>
                    <hr>
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