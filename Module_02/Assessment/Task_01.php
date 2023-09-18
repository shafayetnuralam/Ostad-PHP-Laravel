<?php
// Task 1: Looping with Increment using a Function

// Function to print even numbers within a specified range with a step
function printEvenNumbers($start, $end, $step) {
    // Using for loop
    echo "Using for loop: ";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
    }
    echo "<br>";

    // Using while loop
    echo "Using while loop: ";
    $i = $start;
    while ($i <= $end) {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
        $i += $step;
    }
    echo "<br>";

    // Using do-while loop
    echo "Using do-while loop: ";
    $i = $start;
    do {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the function with the specified arguments
printEvenNumbers(1, 20, 2);
?>