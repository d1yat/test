<?php

namespace App\Models;

/**
 * 
 */
class Person
{
	public $id;
	public $name;

	function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
}