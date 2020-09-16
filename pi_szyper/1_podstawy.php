<?php
$name ='Janusz';
$surname ='Nowak';
//konkatencje
echo 'Imię: $name <br>';
echo "Imię: $name <br>";


//typy danych
//booleam

$prawda=true;
$fałsz=false;

echo $prawda; //1
echo $fałsz;  //nic nie wyświetli

//integer

$bin = 0b1001;//11
$oct = 012;//10
$dec = 12;//12
$hex = 0xC;//12

echo "<br>$bin";
echo "<br>$oct";
echo "<br>$dec";
echo "<br>$hex";
//składnia heredoc

$name='anna';

$text =<<<LABEL
<br>Heredoc 1 <br>
Imię: $name
<hr>
LABEL;
echo $text;

/*echo <<<L

 Heredoc 2 <br>

 Imię: $name <br>
 Nazwisko: $surname <hr>
 L;*/
 //składnia nowdoc
 echo<<<'L'
 Nowdoc<br>
 Imię: $name<br>
 Nazwisko: $surname<hr>
 L;

 $city = 'Poznań';
 echo "Nazwa zmiennej: \$city,wartość: $city";
?>
