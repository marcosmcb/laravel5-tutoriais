@extends('master')

@section('content')

	<h2>{{ $song->title }}</h2>

	{!! Form::model($song, ['url' => 'songs/' . $song->slug , 'method' => 'PATCH']) !!}

		{{-- title corresponds to the field 'title' of our database --}}

		<div class="form-group">
			{!!		Form::text('title', null, ['class' => 'form-control'] )	!!}
		</div>

		<div class="form-group">
			{!! Form::textarea('lyrics', null, ['class' => 'form-control'])  !!}
		</div>

		<div class="form-group">
			{!!  Form::submit('Update Song', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
	
@stop