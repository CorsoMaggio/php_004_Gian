<?php
/* Struttutra genitore-figlio, in cui ogni classe avrà un attributo public del tipo:
$nameContinent
La struttura deve seguuire questo ordine:
1)Continent
2)Country
3)Region
4)Province
5)City
6)Street 
*/

class Continent{
  public string $nameContinent;

  public function __construct($a)
  {
    $this->nameContinent = $a;
  }
}

class Country extends Continent
{
  public string $nameCountry;

  public function __construct($a,$b)
  {
    parent::__construct($a);
    $this->nameCountry = $b;
  }
}

class Region extends Country
{
  public string $nameRegion;

  public function __construct($a, $b, $c)
  {
    parent::__construct($a, $b);
    $this->nameRegion = $c;
  }
}

class Province extends Region
{
  public string $nameProvince;

  public function __construct($a, $b, $c, $d)
  {
    parent::__construct($a, $b, $c);
    $this->nameProvince = $d;
  }
}

class City extends Province
{
  public string $nameCity;

  public function __construct($a, $b, $c, $d, $e)
  {
    parent::__construct($a, $b, $c, $d);
    $this->nameCity = $e;
  }
}

class Street extends City
{
  public string $nameStreet;

  public function __construct($a, $b, $c, $d, $e, $f)
  {
    parent::__construct($a, $b, $c, $d, $e);
    $this->nameStreet = $f;
  }

  public function location()
  {
    echo "I miei genitori sono cresciuti in via $this->nameStreet, città $this->nameCity, provincia $this->nameProvince, regione $this->nameRegion, stato $this->nameCountry, in $this->nameContinent.\n";
  }
}

$frase = new Street('Sud-America','Ecuador','La costa','Santo Domingo de los Tsáchilas','Concordia','Boh');

//Non ho idea di come si chiamano le strade in Ecuador.

$frase->location();


