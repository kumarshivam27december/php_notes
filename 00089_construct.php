<?php
class MyClass {
    private $message;
    private $type;

    function __construct($message, $type = null) {
        $this->message = $message;
        echo $this->message . "\n"; 
        
        if ($type !== null) {
            $this->type = $type;
            echo $this->type . "\n";
        }
    }
}
$obj1 = new MyClass("This is a message.<br>");
$obj2 = new MyClass("This is another message", "type1");

?>
