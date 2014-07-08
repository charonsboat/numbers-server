<?php

class NumberController extends BaseController {
	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'NumberController@index');
	 */
	public function index($number)
	{
		$ones = array(
			0 => 'zero',
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
			11 => 'eleven',
			12 => 'twelve',
			13 => 'thirteen',
			14 => 'fourteen',
			15 => 'fifteen',
			16 => 'sixteen',
			17 => 'seventeen',
			18 => 'eightteen',
			19 => 'nineteen',
			20 => 'twenty',
			30 => 'thirty',
			40 => 'forty',
			50 => 'fifty',
			60 => 'sixty',
			70 => 'seventy',
			80 => 'eighty',
			90 => 'ninety',
		);

		$hundred = 'hundred';

		$thousands = array(
			'thousand',
			'million',
			'billion',
			'trillion',
			'quadrillion'
		);

		$words = array();

		if ($number <= 0)
		{
			$wordForm = $ones[0];
			return Response::json(array('number' => $number, 'words' => $wordForm));
		}
		else
		{
			$segments = str_split(strrev($number), 3);
			$index = -1;

			foreach ($segments as $segment)
			{
				if ($index >= 0)
				{
					$words[] = $thousands[$index];
				}

				if (isset($segment{1}) && $segment{1} == '1')
				{
					$words[] = $ones[$segment{1} . $segment{0}];
				}
				else if (isset($segment{1}) && $segment{1} != '0')
				{
					if ($segment{0} == '0')
					{
						$words[] = $ones[$segment{1}];
					}
					else
					{
						$words[] = $ones[$segment{1} * 10] . '-' . $ones[$segment{0}];
					}
				}
				else
				{
					if ($segment{0} != '0')
					{
						$words[] = $ones[$segment{0}];
					}
				}

				if (isset($segment{2}) && $segment{2} != '0')
				{
					$words[] = $ones[$segment{2}] . ' ' . $hundred;
				}

				++$index;
			}

			$wordFormat = implode(' ', array_reverse($words));

			return Response::json(array('number' => $number, 'words' => $wordFormat));
		}
	}

}