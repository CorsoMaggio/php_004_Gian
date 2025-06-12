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
  public function __construct() {
    $this->description();
  }

  protected function description() {
  }
}

class Vertebrate extends Animal {
    protected function description() {
        parent::description();
        echo "Sono un animale Vertebrato\n";
    }
}

class Invertebrate extends Animal {
    protected function description() {
        parent::description();
        echo "Sono un animale Invertebrato\n";
    }
}
 class WarmBlooded extends Vertebrate {
    protected function description() {
        parent::description();
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrate {
    protected function description() {
        parent::description();
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Fish extends ColdBlooded {
    protected function description() {
        parent::description();
        echo "Sono un pesce.\n";
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlooded {
    protected function description() {
        parent::description();
        echo "Sono un Serpente\n";
    }
}

class Bird extends WarmBlooded {
    protected function description() {
        parent::description();
        echo "Sono un Uccello\n";
    }
}

class Mammal extends WarmBlooded {
    protected function description() {
        parent::description();
        echo "Sono un Mammifero\n";
    }
}

class Spider extends Invertebrate {
    protected function description() {
        parent::description();
        echo "Sono un Ragno\n";
    }
}

class Worm extends Invertebrate {
    protected function description() {
        parent::description();
        echo "Sono un Verme\n";
    }
}


$salmone = new Fish();

$Boa = new Reptile();

$pellicano = new Bird();

$ragnoViolino = new Spider();

$ornitorinco = new Mammal();