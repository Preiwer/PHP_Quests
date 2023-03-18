<?php
$input=(int)$_POST['num'];

$star='';

for ($i=0;$i<=$input; $i++) {
	 $str.=$i;
	 echo $str.'<br>';
}