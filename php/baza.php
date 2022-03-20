<?php

$povezava = mysqli_connect("localhost","root","","obiskovalcistrani")
or die("Povezava žal ni uspela: " . mysqli_error($povezava));


mysqli_set_charset($povezava,"utf8");


$SQLstavek="INSERT INTO obiskovalci(ime,priimek,upIme,geslo,email,telefon) VALUES ('$ime','$priimek','$upIme','$geslo','$email','$telefon')";


if(!mysqli_query($povezava, $SQLstavek))
{
 die('Napaka: '.mysqli_error($povezava));
}

$SQLstavek="SELECT ime,priimek,email,telefon FROM obiskovalci";


$rezultat = mysqli_query($povezava, $SQLstavek);

while($vrstica = mysqli_fetch_array($rezultat))
{
 echo "<br />";
 echo  $vrstica['ime'] . " " . $vrstica['priimek'];
}


// prekinemo povezavo
mysqli_close($povezava);

?>
