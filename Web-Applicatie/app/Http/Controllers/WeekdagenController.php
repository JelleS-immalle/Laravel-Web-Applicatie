<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekdagenController extends Controller
{
	public function CheckKlas(){
		$cookieValue = \Cookie::get('cookieNaamLeerling');

		$LeerlingInfo = \DB::table('Leerling')->select('KlasNaam')->where('LeerlingNaam', '=', 'Jelle')->first();
		$klasArray = json_decode(json_encode($LeerlingInfo), True);

		print_r(array_values($klasArray));
	}

	public function GeefMaandag(){
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.maandag', compact('array'));
	}

	public function GeefDinsdag(){
		$subjects = \App\Subject::with('teacher')->get();

		return \View::make('weekdagen.dinsdag')->with('subjects', $subjects);
	}

	public function GeefWoensdag(){
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.woensdag', compact('array'));
	}

	public function GeefDonderdag(){
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.donderdag', compact('array'));
	}

	public function GeefVrijdag(){
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.vrijdag', compact('array'));
	}

}
