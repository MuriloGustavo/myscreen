@extends('adminlte::page')

@section('title', 'Gerenciar - MyScreen')

@section('content_header')
    <h1>Gerenciar</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Gerenciar</a></li>
        <li><a href="">Novo</a></li>
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
            
            <form action="{{ route('manage.store') }}"  method="POST" enctype="multipart/form-data">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="image">Imagem:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year">Ano</label>
                    <input type="text" name="year" class="form-control">
                </div>
                <div class="form-group">
                    <label for="runtime">Tempo</label>
                    <input type="text" name="runtime" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rating">Avaliação</label>
                    <input type="text" name="rating" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">Magnet Link:</label>
                    <textarea name="link" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                <label for="genre">Gênero:</label>
                <select name="genre" class="form-control">
                    <option value="">-- Selecione o Genero --</option>
                    @foreach($genres as  $genre)
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="trailer">Trailer:</label>
                    <textarea name="trailer" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>  
    </div>
@stop