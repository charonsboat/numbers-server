<?php

use drmyersii\Numbers;

class NumberController extends BaseController {
	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'NumberController@index');
	 */
	public function index($number)
	{
		$Numbers = new Numbers();
		$words = $Numbers->GenerateWords($number);

		return Response::json(array('number' => $number, 'words' => $words));
	}

}