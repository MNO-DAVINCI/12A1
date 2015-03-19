<?php

class Mens
{
	public static $aantalMensen;
	private $naam;
	private $geslacht;

	//function __construct wordt ALTIJD uitgevoerd bij het maken van een NEW OBJECT.
	public function __construct($naam = "Lam", $geslacht = "Lul") 
	{
		$this->naam = $naam;
		$this->geslacht = $geslacht;
		self::$aantalMensen++;
	}

}

$mensen[58] = new Mens("Mike Faro", "Man");

for ($i=0; $i <= 56; $i++) { 
	$mensen[$i] = new Mens();
	echo Mens::$aantalMensen . "<br>";
}
var_dump($mensen);
