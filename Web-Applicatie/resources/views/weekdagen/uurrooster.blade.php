@extends ('layouts.master')

@section ('content')
		<table class="pure-table">
		<h1>Uurrooster van {{$weekdag}}</h1>
		<tr><th>Uur</th><th>VakNaam</th><th>Leerkracht</th>
			@for ($x = 0; $x < $i; $x++)
			<tr class="pure-table">
				<td>{{array_get($uren, $x)}}</td>
				<td>
				{{$subjects[intval(array_get($volgorde, $x))]->subjectName}}
				</td>
				<td>
				{{$subjects[intval(array_get($volgorde, $x))]->teacher->teacherName}}
				</td>
			</tr>
			@endfor
	</table>
@endsection ('content')