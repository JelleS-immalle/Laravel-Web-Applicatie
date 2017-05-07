<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekdagenController extends Controller
{
	public $globalUren = array('8u25-9u15','9u15-10u05','10u15-11u05','11u05-11u55','12u45-13u35','13u35-14u25','14u35-15u25','15u25-16u15');

	public $globalVolgordeMaandag = array(0,0,4,5,6,7,8);
	public $globalVolgordeDinsdag = array(2,2,9,8,3,10,11,11);
	public $globalVolgordeWoensdag = array(3,7,3,1);
	public $globalVolgordeDonderdag = array(8,7,9,13,0,0,14,14);
	public $globalVolgordeVrijdag = array(2,2,9,7,13,3,10);


	//Deze functie zou de code een stuk korter kunnen maken, maar ze werkt nog niet.
	public function GeefUurrooster($volgordeDag){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->$volgordeDag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.
		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}

	// public function CheckKlas(){
	// 	$cookieValue = \Cookie::get('cookieNaamLeerling');

	// 	$LeerlingInfo = \DB::table('Leerling')->select('KlasNaam')->where('LeerlingNaam', '=', 'Jelle')->first();
	// 	$klasArray = json_decode(json_encode($LeerlingInfo), True);

	// 	print_r(array_values($klasArray));
	// }

	public function GeefMaandag(){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->globalVolgordeMaandag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.

		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}

	public function GeefDinsdag(){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->globalVolgordeDinsdag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.

		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}

	public function GeefWoensdag(){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->globalVolgordeWoensdag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.

		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}

	public function GeefDonderdag(){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->globalVolgordeDonderdag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.

		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}
	public function GeefVrijdag(){
		$subjects = \App\Subject::with('teacher')->get();
		$uren = $this->globalUren;
		$volgorde = $this->globalVolgordeVrijdag;
		$i = count($volgorde); //Deze variabele staat voor het totaal aantal uren die dag.

		return \View::make('weekdagen.uurrooster', compact('subjects', 'uren', 'volgorde', 'i'));
	}
}
