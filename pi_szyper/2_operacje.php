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

//porównanie
$x=1;
$y=1.0;

if ($x == $y)
{
  echo '$x jest równa $y<br>';
}
else
{
  echo '$x nie jest równa $y';
}

echo gettype($x); //integer
echo gettype($y); //double

if ($x === $y)
{
  echo '$x jest identyczna $y<br>';
}
else
{
  echo '$x nie jest identyczna $y';
}

$x=-100;
$y=10;

echo $x <=> $y;
echo '<hr>';

$x=1;
$x=$x++;
echo $x; //1
$y=++$x;
echo $x;//3
echo $y;//2
$y=++$x*2-1;
echo $x;//4
echo $y;//7

// operatory rzutowania
// bool, int, float, string, array, object, unset
$test1 = '123abc4';
$test2 = 0;
$test3 = 20;

echo '<br>Typ danych $test1: ', gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>";
echo 'Typ danych $test1: ',gettype($test1);

echo '<br>Typ danych $test2: ', gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2<br>"; //false
echo 'Typ danych $test2: ',gettype($test2);

echo '<br>Typ danych $test3: ', gettype($test3);
$test3=(float)$test3;
echo "<br>$test3<br>"; //20
echo 'Typ danych $test3: ',gettype($test3);

//rozmiar typu integer
echo PHP_INT_SIZE,'<hr>';//8

//kontrola typu zmiennych
//is_size(), is_float(), is_numeric (). is_string, is_bool, is_null
$x=1;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
$y;
echo is_null($y);
$w;
//operator ignorowania błędów @
echo @gettype($w);//NULL



 ?>
