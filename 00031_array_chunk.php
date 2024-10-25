<?php
    $course = array("a"=>"php","b"=>"react");
    $courses = array("a"=>"php","b"=>"math");

    $diff = array_diff($course, $courses);
    print_r($diff);