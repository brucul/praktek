<form action="index.php" method="post">
	<table>
		<tr>
			<td>Pesan</tr>
			<td><input type="text" name="pesan"></td>
			<td><input type="submit" value="Get"></td>
		</tr>
	</table>
</form>

<?php
session_start();
if(@$_POST["pesan"]){
	$_SESSION["nama"] = "saya";
	$_SESSION["msg"] = @$_POST["pesan"];
}

?>