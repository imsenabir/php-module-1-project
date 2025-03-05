<?php
 // 4. Temperature Converter For Fahrenheit, Celsius and Kelvin.
 define("FACTOR", 9/5);
 define("OFFSET", 32);
 define("KELVIN_OFFSET", 273.15); //

 echo "Enter temperature value: ";
 $temperature = (float) readline();
 echo "Convert to (1: Fahrenheit, 2: Celsius 3: Celsius To Kelvin 4: Fahrenheit To Kelvin ): ";
 $choice = (int) readline();
 switch ($choice) {

    case 1:$result = $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result\n";
    break;


    case 2: $result = ($temperature- OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result\n";
    break;


    case 3:
        if ($temperature >= -273.15) { // Ensure valid Celsius input for Kelvin conversion
            $result = $temperature + KELVIN_OFFSET;
            echo "Temperature in Kelvin: $result\n";
        } else {
            echo "Invalid temperature! Below absolute zero.\n";
        }
        break;

    case 4: $result = ($temperature - OFFSET) / FACTOR + KELVIN_OFFSET; // Fahrenheit to Kelvin
        echo "Temperature in Kelvin: $result\n";
    break;

    


 default:
 echo "Invalid choice!\n";
 break;
 }