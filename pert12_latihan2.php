<?php 

	$con =	mysqli_connect("localhost","root","","lat_database");	

	if (!$con) {
		die("Gagal Terhubung dengan database".mysqli_error());
	}

	$query = mysqli_query($con,"DELETE from tbl_mhs WHERE lastName = 'Prabowo' ");
	if ($query) {
		echo "<font color='green' align='center'>
 	<h1>DATA BERHASIL DIHAPUS</h1>
 </font>";
	}


 ?>