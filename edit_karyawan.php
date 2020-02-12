<?php
include ('koneksi.php');
if(isset($_POST['save'])){
	$query_edit = "update karyawan set
					nik='".$_POST['nik']."',
					nama='".$_POST['nama'].",
					alamat = '".$_POST['alamat']."'
					where
					id_karyawan='".$_POST['id_karyawan']."'";
$proses=mysql_query($query_edit);
if($proses){
	header("location:tampil_karyawan.php");
}else{
	echo mysql_error();
}
}
$data_yg_mau_diedit = mysql_query("select * from karyawan where id_karyawan = '".$_GET['id_karyawan']."'");
$data=mysql_fetch_array($data_yg_mau_diedit);
?>
<form method="post"/>
<table border="1">
	<input type="hidden" name="id_karyawan" value="<?php echo $data['id_karyawan'];?>"/>
	<tr>
	<td>Nik</td>
	<td><input type="text" name="nik" value="<?php echo $data['nik'];?>"/></td>
	</tr>
	<tr>
	<td>nama</td>
	<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"/></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"/></td>
	</tr>
	 <tr>
	 <td></td>
	 <td><input type="submit" name="save" value="simpan"/></td>
	 </tr>
	
</table>
</form>