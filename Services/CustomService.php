<?php

namespace Custom\StandaloneBundle\Services;

class CustomService
{
	/**
	* Check if the number is even or noy
	*
	* @param int $number
	* @return bool
	*/
	public function isEven($number)
	{
		return $number % 2;
	}
}