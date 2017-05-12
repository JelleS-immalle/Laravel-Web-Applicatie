@extends ('layouts.master')

@section ('studentContent')
	<h1>De lessen voor {{$naamLeerling}} worden hieronder getoond</h1>
	<table class="pure-table">
		<tr><th>Vak</th><th>Gegeven door:</th></tr>
		@foreach ($studentSubjects as $subject)
		<tr class="pure-table">
			<td>{{$subject->subjectName}}</td>
			<td>{{$subject->teacher->teacherName}}</td>
		</tr>
		@endforeach
	</table>
@endsection ('studentContent')