@extends('adminlte::page')

@section('title', 'Favoritos - MyScreen')

@section('content_header')
    <h1>Favoritos</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Favoritos</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		
    	</div>
    	<div class="box-body">
            @if (isset($movies))
        		@foreach($movies as $movie)

    	 			<a href="{{ route('home.movie', $movie->id) }}"><img src="{{ url('storage/movies/'.$movie->image) }}" alt="{{ $movie->title }}" height="190" width="130" style="margin:5px"></a>

        		@endforeach
        		{!! $movies->links() !!}
            @else
                <h3>Não existe favoritos</h3>
            @endif
    	</div>
    </div>
@stop