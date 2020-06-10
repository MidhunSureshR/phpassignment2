<?php
/* Submitted by Group 11
   R Midhun Suresh
   Rebin Shaji
   Nihal Narayan
   Nilammudeen
*/
$result = preg_match("/([0-9]{3}-){2}[0-9]{4}$/", $_POST["phone"]) ? "correct" : "wrong";
print "Phone number is $result";
?>
