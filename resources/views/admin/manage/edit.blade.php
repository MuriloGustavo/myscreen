@extends('adminlte::page')

@section('title', 'Gerenciar - MyScreen')

@section('content_header')
    <h1>Gerenciar</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Gerenciar</a></li>
        <li><a href="">Editar</a></li>
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

            <form action="{{ route('manage.update', $movie->id) }}"  method="POST" enctype="multipart/form-data">

                {!! method_field('PUT') !!}

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="image">Imagem</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" value="{{$movie->title}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year">Ano</label>
                    <input type="text" name="year" value="{{$movie->year}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="runtime">Tempo</label>
                    <input type="text" name="runtime" value="{{$movie->runtime}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rating">Avaliação</label>
                    <input type="text" name="rating" value="{{$movie->rating}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">Magnet Link:</label>
                    <textarea name="link" class="form-control" rows="2">{{$movie->link}}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" class="form-control" rows="2">{{$movie->description}}</textarea>
                </div>
                <div class="form-group">
                <label for="genre">Gênero:</label>
                <select name="genre" class="form-control">
                    <option value="">-- Selecione o Genero --</option>
                    @foreach($genres as  $genre)
                        <option value="{{ $genre }}"
                            @if($movie->genre == $genre)
                                selected
                            @endif
                        >{{ $genre }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="trailer">Trailer:</label>
                    <textarea name="trailer" class="form-control" rows="2">{{$movie->trailer}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>  
    </div>
@stop