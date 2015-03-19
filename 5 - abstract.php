<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

abstract class Mens 
{
	protected $naam;
	protected $leeftijd;

	public function __construct($naam, $leeftijd)
	{
		$this->naam = $naam;
		$this->leeftijd = $leeftijd;
	}

	public function getNaam() 
	{
		return $this->naam;
	}
}

class Vrouw extends Mens
{

}

class Man extends Mens
{

}

$henk = new Man("Henk", 9);
echo $henk->getNaam();
