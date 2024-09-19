<?php
echo"Witaj PHP, jak się masz?";
echo "<br>";
$zmiennaTypuLiczbowego = 4;
$zmiennaTypuString ="3";
echo "zmiennaTypuLiczbowego: ".$zmiennaTypuLiczbowego;
echo "<br>";
echo "zmiennaTypuString"." ".$zmiennaTypuString;
echo "<br>";
echo $zmiennaTypuString;
echo "<br>";
$name = "Jan"; //string
$age = 25;
$weight = 70.5;//float
$is_student = true;//Boolen
echo $name;
echo "---". "<br>" . "---";
echo $age;
echo "---" . "<br>"."---";
echo $weight;
echo "---" . "<br>"."---";
echo $is_student;
echo "---" . "<br>";
echo "To jest zmienna name:" . $name . 'To 
zmienna $age:' . $age . "To jest zmienna $weight" . "
" . $weight . " " . $is_student;
echo "<br>" . "---";
echo "---" . "<br>" . "---";
echo"---" . "<br>" ;

$imie = "Mariusz";
$nazwisko = "Was";
echo "$imie" . " " . '$nazwisko';
$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2;
$difr = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;
echo "<br>";
echo "Suma $sum";
echo "<br>";
echo "Rożnica $difr";
echo "<br>";
echo "Iloczyn $product";
echo "<br>";
echo "iloraz $quotient";
echo "<br>";
$liczba = -1;
if ($liczba > 0)
{
    echo "Liczba jest dodatnia";

}
elseif($liczba < 0)
{
    echo "Liczba jest ujemna";
}
else
{
    echo "Liczba jest równa zero";
}
echo "<br>";
$liczbaOcen1 = 0;
if($liczbaOcen1>0)
{
    echo "Brak promocji   do kolejnej klasy";
}
else
{
    echo "Promocja do kolejnej klasy";
}
echo "<br>" . "---";
for ($i=0; $i<=15; $i++){
    echo $i . "<br>";
}
echo "<br>";
function dodaj($liczba1,$liczba2)
{
    return $liczba1 + $liczba2;
}

function mnozenie($liczba1,$liczba2)
{
    return $liczba1 * $liczba2;
}
function dzielenie($liczba1,$liczba2)
{
    return $liczba1 / $liczba2;
}
function odejmowanie($liczba1,$liczba2)
{
    return $liczba1 - $liczba2;
}
function operator($liczba1,$liczba2)
{
    return $liczba1 % $liczba2;
}



echo "<br>";
echo dodaj(3,3);
echo "<br>";
echo mnozenie(5,5);
echo "<br>";
echo dzielenie(10,5);
echo "<br>";
echo odejmowanie(5,6);
echo "<br>"."modulo=";
echo operator(7,5);
echo "<br>"."modulo=";
echo operator(11,10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Witaj!</h1>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ex nesciunt laudantium, repudiandae quasi sed ipsam ab rem exercitationem aperiam numquam tempore blanditiis, voluptate enim a aut quod aliquid doloremque?</p>
</body>

</html>