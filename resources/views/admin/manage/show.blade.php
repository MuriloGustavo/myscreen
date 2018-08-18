@extends('adminlte::page')

@section('title', 'Gerenciar - MyScreen')

@section('content_header')
    <h1>Gerenciar</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Gerenciar</a></li>
        <li><a href="">Visualizar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
            <a href="{{ route('manage.index') }}" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
    		<h3>{{$title}}</h3>
    	</div>
    	<div class="box-body">

            @include('admin.includes.alerts')

            <table>
                <tr>
                    <td style="padding-right: 30px">
                        <p><b>Ano:</b> {{ $movie->year }}</p>
                        <p><b>Duração:</b> {{ $movie->runtime }} min</p>
                        <p><b>Avaliação:</b> {{ number_format($movie->rating, '1', ',', '') }}</p>
                        <p><b>Magnet Link:</b> {{ $movie->link }}</p>
                        <p style="text-align: justify"><b>Descrição:</b> {{ $movie->description }}</p>
                        <p><b>Gênero:</b> {{ $movie->genre }}</p>
                        <p><b>Trailer:</b> <a href="{{ $movie->trailer }}" class="play">{{ $movie->trailer }}</a></p>
                    </td>
                    <td>
                        <img src="{{ url('storage/movies/'.$movie->image) }}" alt="{{ $movie->title }}" height="200" width="140">
                    </td>
                </tr>
                <tr>
                    <td>
                        <form action="{{ route('manage.destroy', $movie->id) }}" method="POST">

                            {!! method_field('DELETE') !!}

                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-folder-close"></span> Deletar</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>  
    </div>
    <script>
        $(".play").yu2fvl();
    </script>
@stop