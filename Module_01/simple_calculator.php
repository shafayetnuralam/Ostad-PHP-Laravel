<?php
// Task 7: Simple Calculator

// Declare variables to store the numbers and the operation
$number1 = 100;
$number2 = 10;
$operation = "subtraction";

// Switch statement to perform the chosen operation
switch ($operation) {
  case "addition":
    $result = $number1 + $number2;
    break;
  case "subtraction":
    $result = $number1 - $number2;
    break;
  case "multiplication":
    $result = $number1 * $number2;
    break;
  case "division":
    $result = $number1 / $number2;
    break;
  default:
    $result = "Invalid operation";
}

// Display the result
echo "The result is " . $result . ".";

?>
