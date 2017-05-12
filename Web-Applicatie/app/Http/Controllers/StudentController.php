<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
	public function GeefLessenLeerling(){
		$naamLeerling = Input::get('naamLeerling');
		$studentId = \App\Student::where('studentName', '=', $naamLeerling)->pluck('id');
		if (!$naamLeerling == ""){
			$studentSubjects = \App\Student::find($studentId)->subjects()->orderBy('subjectName')->get();
			return \View::make('student/student', compact('studentSubjects', 'naamLeerling'));
		} else {
			return \View::make('student/not-found');
		}
	}
}
