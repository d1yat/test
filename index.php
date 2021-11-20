<?php

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

class Main
{
	public static function index()
	{
		echo 'Hey now brown cow';
	}
}

Main::index();