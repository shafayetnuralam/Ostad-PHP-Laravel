<?php
// Task 1:

// Create the associative array
$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);

// Print the age of the student
echo "Age of the student: " . $student['age']. "<br>";


// Task 2:
// Create the associative array
$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);

// Check if the 'grade' key exists in the array
if (array_key_exists('grade', $student)) {
    echo "'grade' key exists in the array."."<br>";
} else {
    echo "'grade' key does not exist in the array.". "<br>";
}


// Task 3:

// Create the array
$numbers = array(100, 200, 50, 40, 50);

// Use a foreach loop to print each value
foreach ($numbers as $number) {
    echo $number . "<br>";
}


// Task 4:

// Create the array
$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

// Define the filter function
function startsWithM($name) {
    return substr($name, 0, 1) === 'M';
}

// Use array_filter() to filter names starting with 'M'
$filteredNames = array_filter($names, 'startsWithM');

// Print the filtered names
foreach ($filteredNames as $name) {
    echo $name . "<br>";
}


// Task 5:

// Create the original string
$originalString = 'Hello, World!';

// Reverse the string using strrev()
$reversedString = strrev($originalString);

// Print the reversed string
echo $reversedString;
?>

