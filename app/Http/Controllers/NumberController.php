<?php

use drmyersii\Numbers;


namespace App\Http\Controllers;

class NumberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index($number)
    {
        $Numbers = new Numbers();
		$words = $Numbers->Words($number);

		return Response::json($words);
    }
}
