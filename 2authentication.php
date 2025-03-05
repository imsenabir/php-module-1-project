 <?php
#Mathod 1  (For Mathod 2 and 3 Please Scroll Down)

define("USERNAME1", "imonbank");
define("PASSWORD1", "verysecure123");

define("USERNAME2", "user1");
define("PASSWORD2", "23456");

define("USERNAME3", "user2");
define("PASSWORD3", "76543");

define("USERNAME4", "user3");
define("PASSWORD4", "98765");

echo "Enter username: ";
$inputUsername = readline();
echo "Enter password: ";
$inputPassword = readline();

if (
    ($inputUsername === USERNAME1 && $inputPassword === PASSWORD1) ||
    ($inputUsername === USERNAME2 && $inputPassword === PASSWORD2) ||
    ($inputUsername === USERNAME3 && $inputPassword === PASSWORD3) ||
    ($inputUsername === USERNAME4 && $inputPassword === PASSWORD4)
) {
    echo "Login Successful! Redirecting To Imon Bank PLC.\n";
} else {
    echo "Invalid username or password.\n";
}



# Mathod 2

 /*define("USERNAME", "imonbank");
 define("PASSWORD", "verysecure123");
 
 echo "Enter username: ";
 $inputUsername = readline();
 echo "Enter password: ";
 $inputPassword = readline();
 if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
 echo "Login Successful! Redirecting To Imon Bank PLC.\n";
 } else {
 echo "Invalid username or password.\n";
 }
*/




# Mathod 3

/*
define("USER_CREDENTIALS", json_encode([
    "imonbank" => "verysecure123",
    "imon" => "23456",
    "hosen" => "76543"
]));

echo "Enter username: ";
$inputUsername = readline();
echo "Enter password: ";
$inputPassword = readline();

$credentials = json_decode(USER_CREDENTIALS, true);

if (isset($credentials[$inputUsername]) && $credentials[$inputUsername] === $inputPassword) {
    echo "Login Successful! Redirecting To Imon Bank PLC.\n";
} else {
    echo "Invalid username or password.\n";
}
*/


