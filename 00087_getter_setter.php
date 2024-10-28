<?php
class person{
    private $name;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
$person  = new person();
$person->setName(("shivam"));
echo "person's name is : ".$person->getName();