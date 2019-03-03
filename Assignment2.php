<?php

	#Week2




	$cars = array(
	    "car1" => array("make" => "Toyota", "Color" => "Green", "year" => 1999,"engine_cc" => 1998), 
		"car2" => array("make" => "BMW", "Color" => "Red", "year" => 2005,"engine_cc" => 2400), 
		"car3" => array("make" => "Renault", "Color" => "White", "year" => 1993,"engine_cc" => 1395),
		"car4" => array("make" => "Ford", "Color" => "Blue", "year" => 2016,"engine_cc" => 2200),
		"car5" => array("make" => "Skoda", "Color" => "Silver", "year" => 2013,"engine_cc" => 2100)
	);



	# (1) tabular format	
 	echo "<p>(1) tabular format</p>
				<table border='1'>
			 		<tr>
				 		<th>Cars</th>
				 		<th>Make</th>
						<th>Color</th>
						<th>Year</th>
						<th>engine_cc</th>
					</tr>";

	reset($cars);
	while ($k = key($cars)) {
		echo "<tr><td>".$k."</td>";
		reset($cars[$k]);
		while ($kk = key($cars[$k])) {
			echo "<td>",$cars[$k][$kk],"</td>";			
			next($cars[$k]);
		}
		echo "</tr>";
		next($cars);
	}
	echo "</table>";


	# (2) Search about Skoda

	echo "<br/><br/>
			<p>(2) Search about Skoda</p>
			<table border='1'>
			 		<tr>
				 		<th>Cars</th>
				 		<th>Make</th>
						<th>Color</th>
						<th>Year</th>
						<th>engine_cc</th>
					</tr>";
	foreach($cars as $k => $v){
		if (array_search("Skoda", $v)){
			echo "<tr><td>" . $k . "</td>";
			foreach ($v as $kk => $vv) {
				echo "<td>",$cars[$k][$kk],"</td>";	
			}
			echo "</tr></table>";
		}
	}



	#(3)CarMake in ascending order

	echo "<br/><br/><p>(3)CarMake sorted in ascending order</p>";
	
	#sort method
	asort($cars);
	
	echo "<table border='1'>
		 		<tr>
			 		<th>Cars</th>
			 		<th>Make</th>
					<th>Color</th>
					<th>Year</th>
					<th>engine_cc</th>
				</tr>";

	reset($cars);
	while ($k = key($cars)) {
		echo "<tr><td>".$k."</td>";
		reset($cars[$k]);
		while ($kk = key($cars[$k])) {
			echo "<td>",$cars[$k][$kk],"</td>";			
			next($cars[$k]);
		}
		echo "</tr>";
		next($cars);
	}
	echo "</table>";

?>