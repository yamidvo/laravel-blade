<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
	<body>
		@include('cabecera')
		@if(isset($saludo))
			{{$saludo}}
		@else
			No hay saludo
		@endif
		@if(isset($frutas))
			@for($i=0; $i < count($frutas); $i++)
				<br><span>{{$frutas[$i]}}</span>
			@endfor
		@endif
		@if(isset($estudiantes))
			@foreach($estudiantes as $estudiante)
				<br>{{$estudiante['nombre'].' '.$estudiante['edad']}}
			@endforeach
		@endif
		@include('pie')
	</body>
</html>