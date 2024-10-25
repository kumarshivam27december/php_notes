<?php
$str = "hello ,world";
$pattern = "/hello/"; //for insensitive case use /hello/i
if(preg_match($pattern,$str)){
    echo "it is present";
}else{
    echo "it is not present";
}
echo "<br>";
$str1 = "apple,banana,orange,apple";
$pattern2 = "/apple/";
preg_match_all($pattern2,$str1,$matches);
print_r($matches);


echo "<br>";
$subject = "The rain in Spain falls mainly on the plain";
$pattern3 = "/ain/";
$replacement = "XYZ";
echo  preg_replace($pattern3,$replacement,$subject);



echo "<br>";
$fruits = array("apple","banana","grapes","avacado","blueberry");
$pattern4 = "/^a/";
$matching = preg_grep($pattern4,$fruits);
print_r($matching);


echo "<br>";
$subject2 = "one,two,three,four";
$pattern5 = "/,/";
$results = preg_split($pattern5,$subject2);
print_r($results);


/**
 * some character classes such as digits letters and whitespace are used so frequently that there are shortcut names for them
 * shortcut what it does
 * matches any single character except newline \n
 * \d matches any digit character . same as [0-9]
 * \D matches any non-digit character. same as [^0-9]
 * \s Matches any whitespace character (space ,tab ,newline same as [])
 * \S matches any non-whitespace character . same as 
 */


 /**position anchors
  * pattern modifier
  */

  echo "<br>";

  $integer1 = 01;
  $pattern6 = '/^(100|[1-9]?[0-9])$/';
  if(preg_match($pattern6,$integer1)){
    echo "the integer is a  number";
  }else{
    echo "this is not an integer";
  }


