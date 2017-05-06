<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5</title>
</head>

<body>
	<ul>
		<h1>All subjects:</h1>
		
		@foreach ($subjects as $subject)
		<li>{{ $subject->subjectName }}</li>
		@endforeach
	</ul>
</body>
</html>