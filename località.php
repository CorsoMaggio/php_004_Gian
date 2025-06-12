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
  public function location()
  {
    echo "Io mi trovo in $this->nameContinent. \n";
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
  public function location()
  {
    echo "Io mi trovo in $this->nameContinent, nello stato dell' $this->nameCountry.\n ";
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

  public function location()
  {
    echo "Io mi trovo nella regione $this->nameRegion, nello stato dell' $this->nameCountry, in $this->nameContinent.\n";
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

  public function location()
  {
    echo "Io mi trovo nella provincia di $this->nameProvince, regione $this->nameRegion, stato $this->nameCountry, in $this->nameContinent.\n";
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

  public function location()
  {
    echo "Io mi trovo nella città di $this->nameCity, provincia $this->nameProvince, regione $this->nameRegion, stato $this->nameCountry, in $this->nameContinent.\n";
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
    echo "Io mi trovo in via $this->nameStreet, città $this->nameCity, provincia $this->nameProvince, regione $this->nameRegion, stato $this->nameCountry, in $this->nameContinent.\n";
  }
}

$lvl1 = new Continent('Sud-America');
$lvl2 = new Country('Sud-America','Ecuador');
$lvl3 = new Region('Sud-America','Ecuador','La Costa');
$lvl4= new Province('Sud-America','Ecuador','La Costa','Santo Domingo de los Tsáchilas');
$lvl5 = new City('Sud-America','Ecuador','La costa','Santo Domingo de los Tsáchilas','Concordia');
$lvl6 = new Street('Sud-America','Ecuador','La costa','Santo Domingo de los Tsáchilas','Concordia','Boh');

//Non ho idea di come si chiamano le strade in Ecuador.

$lvl6->location();


