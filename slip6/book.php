<?php
// Load the XML file into a SimpleXML object
$xml = simplexml_load_file("book.xml");

// Display the attributes and elements of the SimpleXML object
Echo "Book attributes: <br>";
Echo "ISBN: " . $xml['isbn'] . "<br>";
Echo "Publisher: " . $xml['publisher'] . "<br>";
Echo "<br>";

Echo "Book elements: <br>"; 
Echo "Title: " . $xml->title . "<br>";
Echo "Author: " . $xml->author . "<br>";
Echo "Description: " . $xml->description . "<br>";
?>