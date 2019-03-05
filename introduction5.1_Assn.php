<?php
$cars = array(
 	"car1" => array("make" => "Toyota", "Color" => "Green", "year" => 1999,"engine_cc" => 1998), 
	"car2" => array("make" => "BMW", "Color" => "RED", "year" => 2005,"engine_cc" => 2400), 
	"car3" => array("make" => "Renault", "Color" => "White", "year" => 1993,"engine_cc" => 1395),
	"car4" => array("make" => "skoda", "Color" => "White", "year" => 2017,"engine_cc" => 1395)
);
reset($cars);
$i = 1 ;?><?php
while ($key=key($cars)) {
	echo "<h3>the information of car",$i,"</h3><br>";
	for (reset($cars[$key]);$kkey=key($cars[$key]); next($cars[$key])) { 
		echo $kkey ," : ",$cars[$key][$kkey],"<br>";
	}
	?><hr><br><?php
	next($cars);
	$i++;
}

?>