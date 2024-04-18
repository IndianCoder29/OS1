<?php
 // Create initial XML structure
 $cricketXML = new SimpleXMLElement('<CricketTeam></CricketTeam>');
 // Add elements for Australia
 $australiaTeam = $cricketXML->addChild('Team');
 $australiaTeam->addAttribute('country', 'Australia');
 // Add player details for Australia
 $australiaTeam->addChild('player', 'Player1');
 $australiaTeam->addChild('runs', '100');
 $australiaTeam->addChild('wicket', '2');
 // Save the initial structure to cricket.xml
 $cricketXML->asXML('cricket.xml');
 // Load the existing cricket.xml file
 $cricketXML = simplexml_load_file('cricket.xml');
 // Add elements for India
 $indiaTeam = $cricketXML->addChild('Team');
 $indiaTeam->addAttribute('country', 'India');
 // Add player details for India
 $indiaTeam->addChild('player', 'Player2');
 $indiaTeam->addChild('runs', '150');
 $indiaTeam->addChild('wicket', '1');
 // Add more players for India
 $player3 = $indiaTeam->addChild('player', 'Player3');
 $player3->addChild('runs', '80');
 $player3->addChild('wicket', '0');
// Save the updated structure to cricket.xml
 $cricketXML->asXML('cricket.xml');
 echo "Elements added to cricket.xml successfully.";
 ?>
