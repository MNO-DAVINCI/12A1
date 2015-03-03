<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Class is een blauwdruk, dus nog geen object!
class Mens 
{
	protected $naam = "Bewijs!"; // protected enkel benaderbaar in child classes

	public function getNaam()
	{
		echo $this->naam;
	}
}

class Vrouw extends Mens
{
	public function getNaam() 
	{
		echo "Mevrouw zegt: " . $this->naam;
	}
}

class Man extends Mens
{
	public function getNaam()
	{
		echo "Meneer zegt: " . $this->naam;
	}
}

$sjonnie = new Man();
echo $sjonnie->getNaam(); // getNaam functie is in iedere classes net iets anders, dit is polymorpisme