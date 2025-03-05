<?php
 echo "Enter units consumed: ";
 $units = (float) readline();
 
 if ($units <= 100) {
 $bill = $units * 14.5; // 14.5 BDT per unit for first 100 units
 } elseif ($units <= 200) {
 $bill = 100 * 14.5 + ($units- 100) * 30; // 30 BDT per unit for 101–200 units
 } else {
 $bill = 100 * 14.5 + 100 * 30 + ($units- 200) * 38;} // 38 BDT per unit above 200 units
 
 echo "Total bill: ৳ $bill Taka \n";