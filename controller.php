<?php

function schalten($n){
$filename = "/sys/class/gpio/gpio$n/value";
$handle = fopen($filename, "r");
$contents = fgetc($handle);
fclose($handle);
$handle=fopen($filename,"w");
if ($contents == "1")
        exec('echo "0" > /sys/class/gpio/gpio'.$n.'/value');
else
        exec('echo "1" > /sys/class/gpio/gpio'.$n.'/value');

#fclose($handle);

}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
	switch($_POST['button']){
		case "1":
                        schalten(4);
			break;
		case "2":
			schalten(3);
			break;
		case "3":
			schalten(2);
			break;
		case "4":
			schalten(17);
			break;
		case "5":
			echo "sie wollen spenden? Dies ist meine BTC adresse:";
			break;

		break;
	}


	header('Location: http://192.168.2.5/Alexander/Steuerung.php');
}
	elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)){
	echo "GET ELEMENT! <br />";
	print_r($_GET);
}

else
	echo "404 Error";


