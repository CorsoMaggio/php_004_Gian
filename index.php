<?php

/*$users = [
  ['name' => 'Francesco'],
  ['firstname' => 'Antonio'],
  ['nome' => 'Luigi'],
  ['name' => 'Luigi']
];



foreach($users as $user){
  echo $user['name'];
  echo $user['firstname'];
  echo $user['nome'];
};*/

/*Come scrivere le classi:
//Inglese
//Singolare
//Prima lettera maiuscola*/


class Person
{
  // Nome, Cognome, Età;
  public string $firstname;
  public string $lastname;
  public int $age;
  //Attributi = variabile
  //Metodi = funzioni
  //Costruttore

  public function __construct($firstname,$lastname,$age) {
    // magic o built_in fuction perchè gia esistente
    //prendimi "Francesco" e mettilo dentro $firstname
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
  }
  //fuction user creata da me
  public function sayHello()
  {
    echo "Ciao mi chiamo $this->firstname $this->lastname \n";
  }
}

$Francesco = new Person('Francesco', 'Mansi' , 18);//Istalziare una nuova classe
$Gianpierre = new Person('Gianpierre', 'Carreno' , 22);//Istalziare una nuova classe
// Ora $Francesco, $Gianpierre sono oggetti.
//Ciao mi chiamo Nome Cognome;
/*echo "Ciao mi chiamo $Francesco->firstname $Francesco->lastname \n";
echo "Ciao mi chiamo $Gianpierre->firstname $Gianpierre->lastname \n";*/


// variabile globale accessibile a tutta la classe

$Francesco->sayHello();
$Gianpierre->sayHello();