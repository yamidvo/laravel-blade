<!DOCTYPE html>
<html>
<head>
	<title></title>
	@section('cabecera')
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<style type="text/css">
			.content{
				margin-top: 100px;
			}
		</style>
	@show
</head>
<body>
	@include('importar.navbar')
	@yield('cuerpo')
	@include('importar.footer')
</body>
</html>