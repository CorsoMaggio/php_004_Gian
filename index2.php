<?php

class Person
{
    public string $firstname;
    public string $surname;
    public int $age;

    public function __construct($a, $b, $c)
    {
        $this->firstname = $a;
        $this->surname = $b;
        $this->age = $c;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->firstname $this->surname.\n";
    }
}

class Student extends Person
{
    public float $avg;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->avg = $d;
    }
    //Abstract class
    public function sayHello()
    {
        echo "Ciao, mi chiamo $this->firstname $this->surname, ho una media di $this->avg.\n";
    }
}

class Teacher extends Person
{
    public float $salary;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->salary = $d;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->firstname $this->surname, ho $this->age anni e guadagno $this->salary €.\n";
    }
}

$persona = new Person('Wario', 'Viola', 90);
$studente = new Student('Luigi', 'Verdi', 20, 8);
$docente = new Teacher('Mario', 'Rossi', 45, 1500.00);

$persona->sayHello();
$studente->sayHello();
$docente->sayHello();

var_dump($persona);
var_dump($studente);
var_dump($docente);
