IUG  
Web Programming 2 - SICT 2308  
ِِAssginment 2   

-----------------------2--------------------------
<?php
$NameCountry = array ("egypte" => "ALSISI","jordan" => "Abdullah2", "palestine" => "abumazn", "syria" => "alasad", "saudi" => "Bn salman",);
		var_dump($NameCountry);

$colleges = array(0 => "IT ==>>rbhe",1 =>"Sciense==> tawfik",2 =>"history ==>mohamed");
$student1 = array(70,50,90);
echo "<br>";
echo "<br>";
echo "<br>";
for ($i=0; $i <count($colleges) ; $i++) { 

if ($student1[$i]>=90) {
	echo " name colleges ",$colleges[$i]," <==name dean  "," ..mark ", $student1[$i] ,"  Exll ";
}elseif ($student1[$i]>=80) {
	echo " name colleges ",$colleges[$i]," <==name dean  "," ..mark ", $student1[$i] ," varygood ";
}elseif ($student1[$i]>=70) {
	echo " name colleges ",$colleges[$i]," <==name dean  ", " ..mark ",$student1[$i] ," good ";
}elseif ($student1[$i]>=60) {
	echo " name colleges ",$colleges[$i]," <==name dean  "," ..mark ", $student1[$i] ," pass";
}else {
	echo " name colleges ",$colleges[$i]," <==name dean  ", " ..mark ",$student1[$i] ," not succ";
}
echo "<br>";
}
?>
