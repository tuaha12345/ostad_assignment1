<?php
// Write a PHP script to convert a temperature of 32 degrees Celsius to Fahrenheit.
// Store just the temperature value in a variable, no need to store the unit(Celsius). 
//Print the result using the printf function to show up to 2 decimal points.
// echo "32 degree in Fahrenheit is ".(32*9/5+32)." degree";
$temp_in_Celsius = 32;
$temp_in_Fahrenheit = ($temp_in_Celsius * 9 / 5) + 32;
printf("%.2f", $temp_in_Fahrenheit);
?>