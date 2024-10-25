<?php
    $courses[" int 220 "] = "php ";
    $courses[" int 221 "] = "laravel ";
    $courses[" int 222 "] = "nodejs ";
    $courses[" int 252 "] = "react-js ";
    echo "<br>";
    print_r( $courses);


    foreach ($courses as $course) {
            echo "$course"."<br>";
    }


    echo "<br>";
    $fruits = array("apple","banana","cherry","potato","watermelon","guava","grapes");
    print_r($fruits);
    echo "<br>";
    echo "<br>";
    array_push($fruits,"orange","kiwi","lemon");
    print_r($fruits);
    echo "<br>";



    $last_element = array_pop($fruits);
    echo $last_element;
    echo "<br>";

    print_r($fruits);

    echo "<br>";



    echo "multidimensional array";
    $result = array(
        array("rohit","kumar","dalla"),
        array("harsh","kumar","daku"),
        array("loveu","singh","lovdu")
    );
    echo "<br>";
    
     
    print_r($result);