@extends('adminlte::page')

@section('title', 'Home - MyScreen')

@section('content_header')
    <h1>Filmes</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Filme</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
            <a href="{{ route('admin.home') }}" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
            <h3>{{$title}}</h3>
    	</div>
    	<div class="box-body">
    		<table>
                <tr>
                    <td style="padding-right: 30px">
                        <p><b>Ano:</b> {{ $movie->year }}</p>
                        <p><b>Duração:</b> {{ $movie->runtime }} min</p>
                        <p><b>Avaliação:</b> {{ number_format($movie->rating, '1', ',', '') }}</p>
                        <p><b>Magnet Link:</b> {{ $movie->link }}</p>
                        <p style="text-align: justify"><b>Descrição:</b> {{ $movie->description }}</p>
                        <p><b>Gênero:</b> {{ $movie->genre }}</p>
                        
                        <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-heart"></span> Adicionar Favoritos</a>

                        <a href="{{ $movie->trailer }}" class="btn btn-success play"><span class="glyphicon glyphicon-facetime-video"></span> Assistir Trailer</a>

                        <a class="btn btn-primary"><span class="glyphicon glyphicon-play"></span> Assistir Filme</a>
                    </td>
                    <td>
                        <img src="{{ url('storage/movies/'.$movie->image) }}" alt="{{ $movie->title }}" style="max-width: 200px">
                    </td>
                </tr>
            </table>
    	</div>
    </div>

    <script>
        $(".play").yu2fvl();
    </script>
@stop