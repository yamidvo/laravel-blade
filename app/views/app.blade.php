@extends('layouts.layout')
@section('titulo')
Inicio
@stop
@section('cabecera')
	@parent
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" />
@stop
@section('cuerpo')
	<div class="container content">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hola!</h1>
            <p>Ejemplo del motor de plantillas blade!</p>
          </div>
          </div><!--/row-->
        </div><!--/span-->
        </div>
@stop