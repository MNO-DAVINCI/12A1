<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Class is een blauwdruk, dus nog geen object!
class Mens 
{
	private $naam;

	public function setNaam($arg)
	{
		if (strlen($arg) < 10) {
			$this->naam = $arg; //$this verwijst naar het object, b.v. $sjonnie->naam of $anita->naam
		} else {
			$this->naam = "te lang";
		}
	}

	public function getNaam()
	{
		return $this->naam; //$this verwijst naar het object, b.v. $sjonnie->naam of $anita->naam
	}
}

$sjonnie = new Mens();
$sjonnie->setNaam("Sjonnieeeeeeeeeeeeeee");
echo $sjonnie->getNaam();