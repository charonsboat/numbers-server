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
		$words = $Numbers->Words($number);

		return Response::json($words);
	}

}