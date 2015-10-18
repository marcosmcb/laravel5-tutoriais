@extends('master')


@section('content')

	@foreach ($songs as $song)
		
		<li> 

			{!! link_to_route('songs.show', $song->title, [$song->slug] ) !!}

			{{-- <a href="{{ route('song_path', [$song->slug]) }}"> 
				{{ $song->title }} 
			</a> --}}
		</li>

	@endforeach

@stop