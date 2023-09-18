<?php
// Task 3: Break on Condition

// Function to calculate and print the first 10 Fibonacci numbers
function printFirst10FibonacciNumbers() {
    $fibonacci_series = [];
    $fibonacci_series[] = 0;
    $fibonacci_series[] = 1;

    echo "Fibonacci Series (First 10 numbers): ";

    for ($i = 2; $i < 10; $i++) {
        $fibonacci_series[] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
        
        if ($fibonacci_series[$i] > 100) {
            break; // Break out of the loop if a Fibonacci number is greater than 100
        }
            
        echo $fibonacci_series[$i];
        if ($i < 9) {
            echo ', '; // Add a comma and space for better readability (optional)
        }
    }
}

// Call the function to calculate and print the first 10 Fibonacci numbers
printFirst10FibonacciNumbers();
?>
