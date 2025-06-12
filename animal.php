<?php
// Devo creare una classe Animal in cui, cosi come per le altre
// non posso usare la classe public, se non per la constructor
// devo usare la funzione di visibilita PROTECTED per stampare la sua specializzazione (Attenti all’overwrite)
// Le classi non devono avere attributi
// Assegnare delle descrizioni: 
// in cui si indica se l'animale è vertebrato od invertebrato
// vert-class o invert-class
// samgue freddo o caldo

class Animal {
  public function __construct() 
  {
    $this->Animaldescription();
  }

  protected function Animaldescription() {
    echo "Sono un animale\n";
  }
}

class Vertebrate extends Animal {
  public function __construct() {
    parent::__construct();
    $this->Vertebratedescription();
  }

  protected function Vertebratedescription() {
    echo "Sono un animale Vertebrato\n";
  }
}

class WarmBlooded extends Vertebrate {
  public function __construct() {
    parent::__construct();
    $this->WarmBloodeddescription();
  }

  protected function WarmBloodeddescription() {
    echo "Ho il sangue caldo.\n";
  }
}

class ColdBlooded extends Vertebrate {
  public function __construct() {
    parent::__construct();
    $this->ColdBloodeddescription();
  }

  protected function ColdBloodeddescription() {
    echo "Ho il sangue freddo.\n";
  }
}

class Fish extends ColdBlooded {
  public function __construct() {
    parent::__construct();
    $this->Fishdescription(); 
  }

  protected function Fishdescription() {
    echo "Sono un pesce\n";
  }
}

class Mammal extends WarmBlooded {
  public function __construct() {
    parent::__construct();
    $this->Mammaldescription(); 
  }

  protected function Mammaldescription() {
    echo "Sono un mammifero\n";
  }
}

$merluzzo = new Fish();
$ornitorinco = new Mammal();
