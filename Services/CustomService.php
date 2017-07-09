<?php

namespace Custom\StandaloneBundle\Services;

class CustomService
{
	private $number;

	public function __construct($number) {
		$this->number = $number;
	}

	/**
	* Check if the number is even or noy
	*
	* @param int $number
	* @return bool
	*/
	public function isEven()
	{
		return $this->number % 2;
	}
}