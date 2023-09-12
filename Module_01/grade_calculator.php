<?php
// Task 3: Grade Calculator

// Declare three variable test scores
$testScore1 = 90;
$testScore2 = 80;
$testScore3 = 70;

// Calculate the average test score
$averageTestScore = ($testScore1 + $testScore2 + $testScore3) / 3;

// Determine the letter grade
if ($averageTestScore >= 90) {
  $letterGrade = "A";
} else if ($averageTestScore >= 80) {
  $letterGrade = "B";
} else if ($averageTestScore >= 70) {
  $letterGrade = "C";
} else if ($averageTestScore >= 60) {
  $letterGrade = "D";
} else {
  $letterGrade = "F";
}

// Display the average test score and letter grade
echo "The average test score is " . $averageTestScore . " and the corresponding letter grade is " . $letterGrade . ".";
?>