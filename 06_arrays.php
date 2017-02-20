<?php

// Maak een Array met 3 namen van medeleerlingen.
$medeleerlingen = Array("Axel", "Sander", "Liam");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
for ($getal=0; $getal < 3; $getal++) {
  echo "<ul>$medeleerlingen[$getal]</ul>";
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
foreach ($medeleerlingen as $leerling) {
  echo "<li>$leerling</li>";
  echo "<br>";
}



$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.
for ($getalnaam=0; $getalnaam < 5; $getalnaam++) {
  echo $naam[$getalnaam];
}
?>
