<form action="for.php" method="post">
	Nilai Awal
	<input type="text" name="awal"><br>
	Nilai Akhir
	<input type="text" name="akhir"><br>
	<input type="submit" value="Proses">
</form>

<?php
if(array_key_exists("awal", $_POST) && array_key_exists("akhir", $_POST)){
	for($counter = $_POST["awal"]; $counter <= $_POST["akhir"]; $counter++){
		echo $counter."<br>";
	}
	
	echo "<br>";
	$counter = $_POST["awal"];
	while($counter <= $_POST["akhir"]){
		echo $counter++."<br>";
	}
	
	$data = array();
	echo "<br>";
	$counter = $_POST["awal"];
	do{
		echo $counter."<br>";
		array_push($data, $counter);
	}while($counter++ < $_POST["akhir"]);
	
	echo "<br>";
	foreach($data as $nilai){
		echo $nilai."<br>";
	}
}
?>