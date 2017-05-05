# Reference code

#### In dit bestand komt code die ik getest heb en die me later nog zou kunnen helpen.

```
$studentsFollowingSoftware =
App\Student::whereHas('subjects', function($query) {$query->where('subjectName', 'like', 'Software');})->pluck('studentName');

$studentsFollowingNatuurwetenschappen =
App\Student::whereHas('subjects', function($query) { $query->where('subjectName', 'like', 'Natuurwetenschappen');})->pluck('studentName');
```
