<?php
$ar=array(2,3,4,17);
$a=array();

foreach($ar as $value){
	$fp = fopen('/sys/class/gpio/gpio'.$value.'/value', 'r');
	if (!$fp) 
	    echo 'Could not open file somefile.txt';
	$a["switch".$value]=fgetc($fp);
}

echo json_encode($a);
