<?php
$cars = array(
 	"car1" => array("make" => "Toyota", "Color" => "Green", "year" => 1999,"engine_cc" => 1998), 
	"car2" => array("make" => "BMW", "Color" => "RED", "year" => 2005,"engine_cc" => 2400), 
	"car3" => array("make" => "Renault", "Color" => "White", "year" => 1993,"engine_cc" => 1395),
	"car4" => array("make" => "skoda", "Color" => "White", "year" => 2017,"engine_cc" => 1395)
);
reset($cars);
$i = 1 ;?>



<table border="2">
	<tr>
		<th></th>
		<th>make</th>
		<th>color</th>
		<th>year</th>
		<th>engine_cc</th>
	</tr>

<?php
while ($key=key($cars)) {
	echo "<tr><th>car",$i,"</th>";
	for (reset($cars[$key]);$kkey=key($cars[$key]); next($cars[$key])) { 
		echo "<td>",$cars[$key][$kkey],"</td>";
	}
	echo "</tr>";
	next($cars);
	$i++;
}

?>
</table><br><br>



<table border="2">
	<tr>
		<th>make</th>
		<th>color</th>
		<th>year</th>
		<th>engine_cc</th>
	</tr>
<?php
$carmade=$_POST["carmade"];
foreach ($cars as $key => $value) {
	echo "<tr>";
	if (array_search($carmade, $value)) {
		for(reset($value); $kkey=key($value); next($value)){
			echo "<td>",$value[$kkey],"</td>";
		}
		echo "</tr>";
	}
}
?>
</table>


<?php
sort($cars);
for (reset($cars);$key=key($cars) ; next($cars)) { 
	
		echo $cars[$key]["make"];
	
}

?>
