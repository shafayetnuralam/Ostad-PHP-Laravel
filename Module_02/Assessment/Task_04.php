<?php
// Task 4: Fibonacci Series printing using a Function

// Function to generate and print the first n Fibonacci numbers
function generateAndPrintFibonacci($n) {
    $fibonacci_series = [];
    $fibonacci_series[] = 0;
    $fibonacci_series[] = 1;

    echo "Fibonacci Series (First $n numbers): ";

    for ($i = 2; $i < $n; $i++) {
        $fibonacci_series[] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
        
        echo $fibonacci_series[$i];
        if ($i < $n - 1) {
            echo ', ';
        }
    }
}

// Call the function to generate and print the first 15 Fibonacci numbers
generateAndPrintFibonacci(15);
?>
