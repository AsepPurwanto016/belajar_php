<?php
include('koneksi.php');
if(isset($_POST['save'])) {
	$query_save="insert into karyawan (nik,nama,alamat)
	values('".$_POST['nik']."',
		   '".$_POST['nama']."',
	       '".$_POST['alamat']."'
	)";
	$proses=mysql_query($query_save);
	if($proses) {
		echo "data berhasil di input";
	}else{
		echo mysql_error();
	}
}
?>
<form method="post">
<table border="1">
	<tr>
		<td>nik</td>
		<td><input type="text" name="nik"></td>
	</tr>
	
	<tr>
		<td>nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	
	<tr>
		<td>alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	
	<tr>
	<td></td>
		<td><input type="submit" name="save"></td>
	</tr>
	
</table>
</form>