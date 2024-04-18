<?php

$xml = new DOMDocument();
$xml->load('movie.xml');

$movie = $xml->getElementsByTagName('MovieInfo');

foreach($movie as $m){
    Echo "Movie Title: " . $m->getElementsByTagName('MovieTitle')[0]->textContent . ", ";
    Echo "Actor Name: " . $m->getElementsByTagName('ActorName')[0]->textContent . "<br>";

}

?>