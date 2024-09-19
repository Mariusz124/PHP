<?php
	/*
	$wiek=58;
	if($wiek<=18)
	{
		echo "Jestes niepełnoletni";
	}
	elseif($wiek>18 & $wiek<=65)
	{
		echo "Jestes dorosły ";
	}
	else
	{
		echo "Jestes seniorem";
	}
	*/
	// $car=array("BMW","Bentley","Toyota","Fiat","Ferrari");
	// $reversedArray = array_reverse($car);
	// print_r($reversedArray);
	// echo "<br>"."---------------"."<br>";
	// echo "<br>";
	// array_shift($car);//usuniecie pierwszego elementu tablicy
	// print_r($car);
	// echo "<br>"."---------------"."<br>";
	// echo "<br>";
	// array_pop($car);//usuwa ostatni element z tablicy
	// print_r($car);
	// echo "<br>"."---------------"."<br>";
	// echo "<br>";
	// array_push($car,"Pontiac");//Dodaje element na koniec tablicy
	// print_r($car);
	// echo "<br>"."---------------"."<br>";
	// echo "<br>";
	// $myStr = "Programowanie";
	// $Odwrocony=strrev($myStr);//odwrócenie stringa
	// print_r($Odwrocony);
	// echo "<br>"."---------------"."<br>";
	// echo "<br>";
	// $myStr = substr($myStr,8);
	// print_r($myStr);
	// $uzytkownik = "Piotr, Nowak,Warszawa,Informatyk";
	// $zmienna =explode(",",$uzytkownik);
	// print_r($zmienna)
	// $tablica = ["Polska","Niemcy","Chorwacja","Francja"];
	// $wynik = implode(",",$tablica);
	// echo "Czy chcesz odwiedzić : {$wynik}";
	// $tablica=["Mariusz"=>37,"Kacper"=>7,"Weronika"=>40];
	// foreach($tablica as $klucz =>$wartosc)
	// {
	// 	echo $klucz ."-->".$wartosc."<br>";
	// }
	$zmienna =3;
	switch ($zmienna)
	{
		case 1:
			echo "Poniedziałek";
			break;
		case 2:
			echo "Wtorek";
			break;
		case 3:
			echo "Sroda";
			break;
		case 4:
			echo "Czwartek";
			break;
		case 5:
			echo "Piątek";
			break;
		case 6:
			echo "Sobota";
			break;
		case 7:
			echo "Niedziela";
		default:
			echo "błedny dzien tygodnia";
			break;
			

	}


	
?>

	