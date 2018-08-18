@extends('adminlte::page')

@section('title', 'Gerenciar - MyScreen')

@section('content_header')
    <h1>Gerenciar</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Gerenciar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<a href="{{route('manage.create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo Filme</a>
    	</div>
    	<div class="box-body">

            @include('admin.includes.alerts')

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Ano</th>
                        <th>Duração</th>
                        <th>Avaliação</th>
                        <th width="100px">Ações</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie->id }}</td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->year }}</td>
                            <td>{{ $movie->runtime }}</td>
                            <td>{{ number_format($movie->rating, '1', ',', '') }}</td>
                            <td>
                                <a href="{{route('manage.edit', $movie->id)}}" class="glyphicon glyphicon-pencil"></a>
                                <a href="{{route('manage.show', $movie->id)}}" class="glyphicon glyphicon-eye-open"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>  
            </table>
            {!! $movies->links() !!}
        </div>
    </div>
@stop