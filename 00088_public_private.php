<?php
class dog{
    public $name;
    public function bark(){
        return "Woof";
    }
}
$dog = new dog();
$dog->name = "Doggy";
echo $dog->name."\n";
echo $dog->bark();
