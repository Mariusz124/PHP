<?php
$mystring = "Aple ,bannane ,fig, orange, grape, Gruszka,strafberry,";
echo $mystring. "<br>". "---------------".
"<br>";  
//dodanie tekstu na koncu stringa 
$mystring.= ",Ivy";
//concatens ,'ivy'to the end of $mystring
echo $mystring."<br>". "-----------".
"<br>";
//usuniecie fragmentu z konca stringa
echo "usuniecie stringa z konca"."<br>";
$mystring = substr($mystring,5,-4);
//remove the last 4 characters from $mystring
echo "2.".$mystring."<br>". "------"."<br>";
$mystring = "apricot, ".$mystring;
echo $mystring. "<br>". "------".
"<br>";
//4. Usuniecie fragmentu z poczatku stringa 
$mystring = substr($mystring,8);
//remove the first 8 charakters  from $mystring
echo $mystring. "<br>" . "------". 
"<br>";
//5. Odwrócenie stringa
$reversedString = strrev($mystring);
//reverse the order of characters in $myString
echo $reversedString. "<br>" . "------". 
"<br>";
?>