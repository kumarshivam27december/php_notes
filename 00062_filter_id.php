<?php
    echo "available filter";
    echo "<br>";
    foreach (filter_list() as $filter) {
       echo $filter."-ID : ".filter_id($filter)."<br>";
    }