<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="ISO-8859-1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Error de Acceso</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/css_401/style.css') }}" />
</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>401 - No puedes acceder</h2>
			</div>
			<a href="{{ route('admin.index') }}">Ir al menú</a>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>