@extends('layouts.layout')
@section('titulo')
Users
@stop
@section('cuerpo')
<div class="container content">
	<table class="table table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Activo</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($users))
      @foreach($users as $user)
        <tr><td>{{$user['nombre']}}</td><td>{{$user['edad']}}</td><td>{{$user['activo']}}</td></tr>
      @endforeach
    @endif
  </tbody>
  </table>
  </div>
@stop