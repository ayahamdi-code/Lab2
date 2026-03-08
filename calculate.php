<?php

$courses = $_POST['course'];
$credits = $_POST['credits'];
$grades = $_POST['grade'];

$totalPoints = 0;
$totalCredits = 0;

for($i=0;$i<count($courses);$i++){

$cr = $credits[$i];
$g = $grades[$i];

$totalPoints += $cr * $g;
$totalCredits += $cr;

}

$gpa = $totalPoints / $totalCredits;

echo "Your GPA is: " . number_format($gpa,2);

?>
