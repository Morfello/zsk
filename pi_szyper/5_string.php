<?php

$text = <<<T
  zsk - Zespół
  Szkół
  Komunikacji<br>
T;

echo $text;
echo n12br($text);

$name = 'jaNusz'

//zamiana na male litery
echo strtolower($name);

//zmiana na duze litery
echo strtoupper($name), '<br>';


//zamiana pirwszej litry na duza

$name= 'jANusz kowalski';

//zamiana pirwszej litry na duza
echo ucfirst($name);

//zamiana wszytkich pierwszych liter na duze

echo ucwords($name);

$name = <<<T
janUsz
T;
echo ucfirst(strtolower($name));

$text = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

echo $lorem;
echo wordwrap($lorem,40, '<br>');
echo wordwrap($lorem,40, '<hr>');

//czyszczenie zawrtosci bufora

ob_clean ();
 ?>
