<?php

//Class is een blauwdruk, dus nog geen object!
class Mens 
{
	public $naam;

	public function praat($arg)
	{
		echo $arg;
	}
}

$anita = new Mens();
$sjonnie = new Mens();

$anita->naam = "Anita"; //dit mag alleen omdat naam public is!
echo $anita->naam . "<br>";
$anita->praat("Terror chick!"); //deze function aanroepen mag alleen vanwege public keyword!
