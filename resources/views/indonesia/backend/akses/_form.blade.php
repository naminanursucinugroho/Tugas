<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('name','Nama Pengguna *',['class'=>'col-md-12']) !!}
	<div class="col-md-12">
		{!! Form::text('name',null,['class'=>'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
	{!! Form::label('email','Alamat Email *',['class'=>'col-md-12']) !!}
	<div class="col-md-12">
		{!! Form::email('email',null,['class'=>'form-control']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
	{!! Form::label('role','Hak Akses *',['class'=>'col-md-12']) !!}
	<div class="col-md-12">
		{!! Form::select('role',App\Role::pluck('display_name','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Hak Akses']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<hr>
<div class="form-group">
	<div class="col-md-12" align="right">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>