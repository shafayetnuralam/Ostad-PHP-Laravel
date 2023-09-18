<?php
// Callback Function
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9,10];


function isEven($number) {

  if ($number % 2 == 0) {
    return true;
  } else {
    return false;
  }
}

$evenNumbers = array_filter($numbers, "isEven");

print_r($evenNumbers);
?>