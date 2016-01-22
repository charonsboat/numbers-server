<?php

namespace App\Http\Controllers;

use drmyersii\Numbers;
use Illuminate\Http\Response;

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

		return response()->json($words);
    }
}
