<?php
function removeEvenNumbers($numbers) {
    // Use array_filter to remove even numbers
    $filteredNumbers = array_filter($numbers, function($number) {
        return $number % 2 != 0;
    });

    // Print the resulting array
    print_r($filteredNumbers);
}

// Create the array containing numbers 1 to 10
$numbers = range(1, 10);
// Call the function with the numbers array as an argument
removeEvenNumbers($numbers);
?>
