<?php

$data = [
    "email"=>"test@example.com",
    "age"=>"23",
    "url"=>"https://www.example.com"
];

$filters = [
    "email"=>FILTER_VALIDATE_EMAIL,
    "age"=>[
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>["min-range"=>1,"max-range"=>120]
    ],
    "url"=>FILTER_VALIDATE_URL
];


$result = filter_var_array($data,$filters);

if($result['email'] && $result['age'] && $result['url']){
    echo "all input are valid.<br>";
    echo "Email: ".$result['email']."<br>";
    echo "age: ".$result['age']."<br>";
    echo "url: ".$result['url']."<br>";

}else{
    echo "everything is fine";
}