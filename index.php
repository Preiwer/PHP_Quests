<?php
$input 				=$_GET['num'];

var_dump($input.'<br>');

if($input>=0 && $input<=7) {
	echo "Спи сколько угодно. Родителей не заебаешь";
}
else if($input>=8  && $input<=12) {
	echo "Хахахахах";
}
else if($input>=13 && $input<=17) {
	echo "Спи по 8-10 часов. На следующий день будешь страдать от учёбы";
}
else if($input>=18 && $input<=25) {
	echo "7-9 часов. Так-как ты получишь кайф.";
}
else if($input>=26 && $input<=64) {
	echo "ZZZzzz...";
}

?>