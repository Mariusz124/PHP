<?php
$imiona = ["Darek", "Aga", "Asia", "Gapcio"];
print_r($imiona);
echo "<br>" . "--------" . "<br>";
// echo $imiona[3];
echo $imiona[0];
echo "<br>";
echo $imiona[1];
echo "<br>";
echo $imiona[2];
echo "<br>";
echo $imiona[3];
echo "<br>";


$wiek = 50;
if ($wiek < 18) {
    echo "Jestes niepełnoletni";
} elseif ($wiek <= 65) {
    echo "Jestes dorosły";
} else {
    echo "Jestes seniorem";
}
echo "<br>";
$myArray = array("Apple","Cherry","Date", "Elderberry","Fig","Grape","Honeydew","Banana");
print_r($myArray);
echo "<br>". "-------". "<br>";
var_dump($myArray);
echo "<br>". "--imiona--"."<br>";
var_dump($imiona);
echo "<br>". "--------"."<br>";
array_push($myArray, "Ivy");
print_r($myArray);
echo "<br>". "--------"."<br>";
//2. Usunniecie ostatniego elementu z tablicy 
array_push($imiona,"Ivy");
print_r($imiona);
//usuwa  ostatni  element z tablicy  $myarray
array_pop($myArray);
echo "<br>";
print_r($myArray);
echo "<br>";
array_pop($imiona);
print_r($imiona);
echo "<br>". "--------"."<br>";

array_unshift($myArray,"Appricot");
print_r($myArray);
echo "<br>". "--------"."<br>";
array_unshift($imiona,"Appricot");
print_r($imiona);
echo "<br>". "--------"."<br>";
//usuniecie pierwszego elementu z tablicy
array_shift($myArray);
//Usuwa pierwszy  element z tablicy $myArray
print_r($myArray);
echo "<br>". "--------"."<br>";
array_shift($imiona);
print_r($imiona);
echo "<br>". "-------"."<br>";

//Odwrocenie kolejnosci elementów w tablicy 
$reversedArray = array_reverse($myArray);
//tworzy nowa tablice $reversedarray, która jest odwróceniem tablicy $myarray
echo "myArray, reversedArray";
echo "<br>". "-------"."<br>";
print_r($myArray);
echo "<br>". "--------"."<br>";
print_r($reversedArray);
echo "<br>". "--------"."<br>";
//6 Posortowanie tablicy alfabetycznie
sort($myArray);
//Sortuje tablice $myArray w kolejnosci alfabetycznej 
echo "<br>". "----sort--"."<br>";
print_r($myArray);
echo "<br>"."---sort--"."<br>";
echo"<br>";
print_r($imiona);
echo "<br>";
sort($imiona);
echo "<br>"."---sort--"."<br>";
print_r($imiona);
echo "<br>"."---sort--"."<br>";
