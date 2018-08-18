@extends('adminlte::page')

@section('title', 'Home - MyScreen')

@section('content_header')
    <h1>Filmes</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<form action="" method="POST" class="form form-inline">

                {!! csrf_field() !!}

                <input type="text" name="year" class="form-control" placeholder="Ano">
                <select name="genre" class="form-control">
                    <option value="">-- Selecione o Genero --</option>
                    @foreach($genres as  $genre)
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Filtrar</button>    
            </form>
    	</div>
    	<div class="box-body">
    		@foreach($movies as $movie)

	 			<a href="{{ route('home.movie', $movie->id) }}"><img src="{{ url('storage/movies/'.$movie->image) }}" alt="{{ $movie->title }}" height="190" width="130" style="margin:5px"></a>

    		@endforeach
    		{!! $movies->links() !!}
    	</div>
    </div>
@stop