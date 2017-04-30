<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekdagenController extends Controller
{
	public function geefMaandag(){
		/* De code die hierin komt geeft de uurroooster
		van maandag. */
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.maandag', compact('array'));
	}

	public function geefDinsdag(){
		/* De code die hierin komt geeft de uurroooster
		van dinsdag. */
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.dinsdag', compact('array'));
	}

	public function geefWoensdag(){
		/* De code die hierin komt geeft de uurroooster
		van woensdag. */
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.woensdag', compact('array'));
	}

	public function geefDonderdag(){
		/* De code die hierin komt geeft de uurroooster
		van donderdag. */
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.donderdag', compact('array'));
	}

	public function geefVrijdag(){
		/* De code die hierin komt geeft de uurroooster
		van vrijdag. */
		$vakken = \DB::table('Vakken')->get();
		$array = json_decode(json_encode($vakken), True);

		return view('weekdagen.vrijdag', compact('array'));
	}


}
