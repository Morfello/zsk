<?php
//wersja php

echo PHP_VERSION, '<br>';
//echo phpinfo();


//interpolacja

echo 'a', 'b', 'c'; //show a show b show c
echo 'a'. 'b'. 'c';//add a+b+c whow abc

//potęgowanie

$pow = 2 ** 10;
echo "$pow<br>"; //1024

//operatory bitowe

$bin = 0b1010;
echo "$bin<br>";//10

$bin = $bin <<2; //110100

echo $bin; //40

$bin = $bin >>3;//10
echo $bin;//5

 ?>
