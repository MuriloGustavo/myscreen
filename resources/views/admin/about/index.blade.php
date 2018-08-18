@extends('adminlte::page')

@section('title', 'Sobre - MyScreen')

@section('content_header')
    <h1>Sobre</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Sobre</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<h3>Descrição do Projeto</h3>
    	</div>
    	<div class="box-body">
    		<p align="justify">Projeto da disciplina de Projeto de Interface, Homem e Maquina, do curso de Computação da Universidade Estadual da Paraiba. Tem como objetivo desenvolver um sistema que seja possivel fazer streaming de video atravez de um link torrent, como também fazer gerencia de usuarios e filmes, visualizar lista de favoritos e historicos.</p>
    		<h3>Tecnologias Utilizadas</h3>
    		<ul>
    			<li>PHP - como linguagem de programação orientada a objeto</li>
    			<li>MySQL - com banco de dados</li>
    			<li>Laravel - como framework para desenvolvimento de aplicação</li>
    		</ul>
    	</div>
    </div>
@stop