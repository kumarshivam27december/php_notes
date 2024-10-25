<?php


$students = [
    "amit shah" => ["politics" => 85, "economics" => 70, "literature" => 78],
    "rahul gandhi" => ["politics" => 15, "economics" => 20, "literature" => 18],
    "nitish kumar" => ["politics" => 85, "economics" => 40, "literature" => 28],
    "narendra modi" => ["politics" => 85, "economics" => 90, "literature" => 98],

];


 
foreach ($students as $name => $subjects) {
    $totalScore = 0;
    $numSubjects = count($subjects);

    foreach ($subjects as $subject => $score) {
        $totalScore += $score;
    }

    $average = $totalScore / $numSubjects;
    echo $name . "'s average score is " . round($average,2) . "<br>";
}

