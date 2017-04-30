<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekdagenController extends Controller
{
	public function geefMaandag(){
		/* De code die hierin komt geeft de uurroooster
		van maandag. */
		$vakken = \DB::table('Vakken')->get();

		return view('weekdagen.maandag', compact('vakken'));
	}

	public function geefDinsdag(){
		/* De code die hierin komt geeft de uurroooster
		van dinsdag. */

		return view('weekdagen.dinsdag');
	}

	public function geefWoensdag(){
		/* De code die hierin komt geeft de uurroooster
		van woensdag. */

		return view('weekagen.woensdag');
	}

	public function geefDonderdag(){
		/* De code die hierin komt geeft de uurroooster
		van donderdag. */

		return view('weekdagen.donderdag');
	}

	public function geefVrijdag(){
		/* De code die hierin komt geeft de uurroooster
		van vrijdag. */

		return view ('weekdagen.vrijdag');
	}


}
