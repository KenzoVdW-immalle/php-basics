<?php
// definieer een globale variable en print hem af op 2 manieren
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
$Var = "hello";

// inside a function
function write() {
    echo $GLOBALS['Var'];
}
write();



// gebruik de $_SERVER-superglobal om zoveel mogelijk informatie af te drukken over het binnenkomende request
echo $_SERVER['REQUEST_METHOD'];


// Gebruik de $_GET-superglobal om de parameters van een URL in een ongenummerde lijst weer te geven.
// Gebruik als URL b.v. `http://localhost/08_superglobals.php?kleur=rood&vorm=ovaal&grootte=medium`.
// Tip: $_GET is een associatieve array.
?>
