<?php
// This echo will show in Front
echo "Welcome to the Panda System!\n";
echo "Enter a number: ";
// (int) means integer
$number = (int) readline();

// Conditional statements with more interactions

if ($number === 999) {  //Please check if the number is 999
    echo "You Are A Pure Panda.\n"; 
} elseif ($number > 0 && $number <= 200) { 
    echo "You Are Regular Panda.\n";
} elseif ($number > 200) { 
    echo "You Have Submitted The Wrong Credential Panda.\n";
} elseif ($number < 0) {  // Please Check if the number is negative
    echo "You Are A Nagetive Panda.\n";
} else {  
    echo "You Are Not A Panda, You Are A Valluk.\n"; 
}




// Additional Options
echo "\nWould you like to continue? (yes/no): ";
$continue = readline();

// Check if user wants to continue
if (strtolower($continue) === "yes") {
    echo "Great! Let's do some more Panda stuff!\n";
    echo "Enter another number to continue: ";
    $newNumber = (int) readline();

    // Additional conditions based on the second input
    if ($newNumber < 0) {
        echo "Oops! Negative number. Are you a negative Panda?\n";
    } elseif ($newNumber == 42) {
        echo "You've found the secret number, Panda! You are wise.\n";
    } else {
        echo "This is a new number. Keep exploring, Panda!\n";
    }

    // Final check with the new number
    echo "Checking number status: ";
    if ($newNumber % 2 == 0) {
        echo "$newNumber is an Even number, Panda!\n";
    } else {
        echo "$newNumber is an Odd number, Panda!\n";
    }
} else {
    echo "Goodbye! Come back when you're ready for more Panda adventures.\n";
}
?>
