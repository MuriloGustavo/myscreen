@extends('adminlte::page')

@section('title', 'Configurações - MyScreen')

@section('content_header')
    <h1>Ajuda</h1>

    <ol class="breadcrumb">
    	<li><a href="">Home</a></li>
        <li><a href="">Ajuda</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<h3>Perguntas frequentes</h3>
    	</div>
    	<div class="box-body">
    		<b>1° Como assistir filme?</b>
    		<ul>
    			<li>Na pagina principal, escolha título.</li>
    			<li>Ao carregar a pagina, você pode:</li>
    			<ul>
    				<li>Assistir o filme</li>
    				<li>Assistir o trailer do filme</li>
    				<li>Adicionar ou remover dos favoritos</li>
    			</ul>
    		</ul>
    		<b>2° Como visualizar o perfil do usuario?</b>
    		<ul>
    			<li>No menu lateral a esquerda, escolha Cadastro - Visualizar.</li>
    		</ul>
    		<b>3° Como editar as informações do perfil do usuario?</b>
    		<ul>
    			<li>No menu lateral a esquerda, escolha Cadastro - Editar.</li>
    			<li>Preecha os novos dados e clique em salvar dados.</li>
    		</ul>
    		<b>4° Como visualizar filmes favoritos do usuario?</b>
    		<ul>
    			<li>No menu lateral a esquerda, escolha Favoritos.</li>
    		</ul>
    		<b>5° Como visualizar historico do usuario?</b>
    		<ul>
    			<li>No menu lateral a esquerda, escolha Historico.</li>
    		</ul>
    	</div>
    </div>
@stop