<?php

$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades);

array_shift($grades);
array_shift($grades);

array_pop($grades);
array_pop($grades);
$totalStudent = count($grades);

$totalScore = array_sum($grades);

$averageScore =  $totalScore / $totalStudent;

echo "Total score after excluding highest and lowest two: $totalScore <br>";
echo "Average score of students after excluding highest and lowest two: $averageScore";

?>