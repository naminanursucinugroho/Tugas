<div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
	{!! Form::label('judul','Judul',['class'=>'col-md-12']) !!}
	<div class="col-md-12">
		{!! Form::text('judul',null,['class'=>'form-control']) !!}
		{!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('amount') ? 'has-error' : '' }}">
	{!! Form::label('amount','Jumlah',['class'=>'col-md-12']) !!}
	<div class="col-md-12">
		{!! Form::number('amount',null,['class'=>'form-control']) !!}
		{!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
		@if (isset($book))
			<p class="help-block">{{ $book->borrowed }} Buku Sedang Dipinjam</p>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? 'has-error' : '' }}">
	{!! Form::label('cover','Sampul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!} <br>
		@if(isset($book) && $book->cover)
		<p>
			{!! Html::image(asset('img/'.$book->cover),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>