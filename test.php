<?php
class X{
    public $name;
    public $age;

    public function getName($name){
        $this->name = $name;

        return $this;
    }

    public function getAge($age){
        $this->age = $age;

        return $this;
    }
}

$x = new X();
echo $x->name = "Pham Hung";
$hung = $x->getName("Hung")->getAge('22')->age;
echo $hung;
echo  $x->name;
