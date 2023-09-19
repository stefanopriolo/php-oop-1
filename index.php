<?php
require_once 'Movie.php';

$movie1 = new Movie("La decima vittima", "Elio Petri", 1965, "IT");
$movie2 = new Movie("Arancia Meccanica", "Stanley Kubrick", 1972, "EN");

echo "Film 1: <br>";
$movie1->print();
echo "<br>";

echo "Film 2: <br>";
$movie2->print();
