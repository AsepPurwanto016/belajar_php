<?php
include('koneksi.php');
$tampil_karyawan =mysql_query("select * from karyawan");


?>

<table border="1">
	<tr>
		<td>nik</td>
		<td>nama</td>
		<td>alamat</td>
		<td colspan="2">Action</td>
	</tr>
<?php
while($data = mysql_fetch_array($tampil_karyawan)) { ?>
		<tr> 
			<td><?php echo $data['nik'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['alamat'];?></td>
			<td><a href="edit_karyawan.php?id_karyawan=<?php echo $data['id_karyawan'];?>"/>edit</a></td>
			<td><a href=""/>hapus</a></td>
		</td>
		
<?php } ?>
</table>