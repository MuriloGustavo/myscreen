@extends('adminlte::page')

@section('title', 'Historico - MyScreen')

@section('content_header')
    <h1>Historico</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Historico</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		
    	</div>
    	<div class="box-body">
    		@if (isset($historics))
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Filme</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historics as $historic)
                            <tr>
                                <td>{{ $historic.movie_id }}</td>
                                <td>{{ $historic.date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3>Não existe historico</h3>
            @endif
    	</div>
    </div>
@stop