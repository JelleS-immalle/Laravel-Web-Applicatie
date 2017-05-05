<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5</title>
</head>

<body>
	<ul>
		@foreach( $leerlingen as $leerling)
			<h1>{{ $leerling->id }}</h1>
			<h1>{{ $leerling->LeerlingNaam }}</h1>
		@endforeach
	</ul>
</body>
</html>