<?php

// Microsoft ha acquisito 5 aziende più piccole con sedi sparse in tutto il mondo.
//Devo realizzare un sistema di monitoraggigio fiscale per ognuna di queste sedi
// Essendo dati finanziari, gli eventuali errori di logica devono rasentare lo 0.
//Utilizzare, quindi, un approccio orientato agli oggetti per risolvere la traccia

/* Esercizio 1
Creare una classe Azienda(Company) che abbia gli attributi public:
- Nome: nome della sede;
- Sede: stato in cui è ubicata la sede;
- Totale Dipendenti (default=0): Numero di dipendenti assunti in quella sede
Definire la funzione__consyruct() come visto a lezione per prendere in input 3 atttributi.
*/

$companies = [];

do {
    echo "Inserisci il nome dell'azienda: ";
    $name = trim(fgets(STDIN));

    echo "Inserisci lo stato dell'azienda: ";
    $companyState = trim(fgets(STDIN));

    do {
        echo "Inserisci il totale dei dipendenti dell'azienda: ";
        $totEmployes = trim(fgets(STDIN));
    } while (!is_numeric($totEmployes) || (int)$totEmployes < 0);

    $companies[] = new Company($name, $companyState, (int)$totEmployes);

    echo "Vuoi inserire un'altra azienda? (si/no): ";
    $continua = strtolower(trim(fgets(STDIN)));

} while ($continua === 'si');

foreach ($companies as $company) {
    $company->acquistionMessage();
}

class Company 
{

  // nome sede, stato sede, tot dipendenti
  public string $name;
  public string $companyState;
  public int $totEmployes;

  public function __construct($name,$companyState,$totEmployes=0 && is_numeric($totEmployes))
  {
    $this->name = $name;
    $this->companyState = $companyState;
    $this->totEmployes = $totEmployes;
  }
  public function acquistionMessage()
  {
    if ($this->totEmployes > 0 ){
     echo "L' ufficio $this->name con sede in $this->companyState ha ben $this->totEmployes dipendenti. \n";
    /*} elseif (!is_numeric($this->totEmployes)) {
      echo  "Devi inserire un numero.";*/
    }
      else {
        echo "L' ufficio $this->name con sede in $this->companyState non ha dipendenti. \n";
    }
  }
}
/* Esercizio 2
Una volta definita la classe, istanziare 5 sedi con i rispettivi dati e controllare che siano stati correttemente memorizzati con un var_dump():
*/

$Company1 = new Company('Apple', 'USA' , 3);//Istalziare una nuova classe
$Company2 = new Company('Barilla', 'ITA' , 3);
$Company3 = new Company('Nintendo', 'JAP');//Istalziare una nuova classe
$Company4 = new Company('Nokia', 'FIN' , 10);//Istalziare una nuova classe
$Company5 = new Company('Xiaomi', 'CHI' , 3);//Istalziare una nuova classe


// var_dump($Company1,$Company2,$Company3,$Company4,$Company5);

$Company1->acquistionMessage();
$Company2->acquistionMessage();
$Company3->acquistionMessage();
$Company4->acquistionMessage();
$Company5->acquistionMessage();