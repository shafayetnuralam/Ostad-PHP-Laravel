<!-- Task 2: Temperature Converter -->
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <label >Temperature</label>
        <input type="number" name="temperature">
        <br>
        <label for="conversion_direction">Conversion Direction</label>
        <select name="conversion_direction">
            <option value="Celsius to Fahrenheit">Celsius to Fahrenheit</option>
            <option value="Fahrenheit to Celsius">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
	
	</form>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Get the temperature and conversion direction 
$temperature = $_POST["temperature"];
$conversionDirection = $_POST["conversion_direction"];

// Convert the temperature
if ($conversionDirection == "Celsius to Fahrenheit") {
  $convertedTemperature = ($temperature * 9 / 5) + 32;
} else {
  $convertedTemperature = ($temperature - 32) * 5 / 9;
}

// Display the converted temperature
echo "The converted temperature is " . $convertedTemperature . " degrees " . $conversionDirection . ".";

}
?>