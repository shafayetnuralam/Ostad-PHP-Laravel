<?php
// Task 2: Skip Multiples of 5

// Using a for loop to print numbers from 1 to 50, skipping multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        // Skip multiples of 5
        // echo "<b>[$i]</b>";
        continue;
    }
    echo $i;
    // Add a comma and space for better readability (optional)
    if ($i < 50) {
        echo ',';
    }
}

?>