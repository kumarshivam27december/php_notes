<?php
class myexample{
    function __construct(){
        print "this is the constructor <br>";
    }

    function __destruct(){
        print "destroying ".__CLASS__."<br>";
    }
}

$obj = new myexample();
?>