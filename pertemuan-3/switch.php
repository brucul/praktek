<form action="switch.php" method="post">
	Kelas <input typr="text" name="kelas"><br>
	<input type="submit" value="Proses">
</form>

<?php
if(array_key_exists("kelas", $_POST)){
	switch($_POST["kelas"]){
		case "4a" :
			echo "Kamu mahasiswa kelas 4A";
			break;
		case "4d" :
			echo "Kamu mahasiswa kelas 4D";
			break;
		default :
			echo "Kamu bukan mahasiswa semester 4";
	}
}
?>