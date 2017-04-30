<!DOCTYPE html>

<html>

<head>

    <title>Uurrooster Maandag</title>

</head>

<body>
	<table>
		<tr><th>Leerkracht</th><th>Vaknaam</th>
		@foreach ($vakken as $vak)
			<tr>
				<td>{{$vak->Leerkracht}}</td>
				<td>{{$vak->VakNaam}}</td>
			</tr>
		@endforeach
	<table>
</body>

</html>