<?php
define('CFG', 'CFG');
include '../cfg.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemendek Url</title>
	<style>

td{
	padding: 10px;
}
		
	</style>
</head>
<body>
<table border="1">
	<tr>
		<td>
			Id
		</td>
		<td>
			Url Pendek
		</td>
		<td>
			Url Asli
		</td>
		<td>
			Aksi
		</td>
	</tr>
	<?php
	$res = mysqli_query($mysqli, "SELECT * FROM daftar_url");
	$tmp = mysqli_num_rows($res);
	if(!empty($tmp)){
		while ($row = mysqli_fetch_assoc($res)){
			echo "<tr>";
			echo "<td>";
			echo "$row[id]";
			echo "</td>";
			echo "<td>";
			echo "$row[url_pendek]";
			echo "</td>";
			echo "<td>";
			echo "$row[url_asli]";
			echo "</td>";
			echo "<td>";
			echo "<a href='skipadd.php?u=$row[url_pendek]' target='_blank'>";
			echo "View";
			echo "</a>";
			echo " / ";echo "<a href='tambah_ubah.php?s=old&id=$row[id]'>";
			echo "Edit";
			echo "</a>";
			echo " / ";
			echo "<a href='hapus.php?id=$row[id]' onclick='return confirm(\"Ingin menghapus dengan id : $row[id]?\")'>";
			echo "Hapus";
			echo "</a>";
			echo "</td>";
			echo "</tr>";
		}
	}
	else{
		echo "<tr>";
		echo "<td colspan='4'>";
		echo "Data tidak ada";
		echo "</td>";
		echo "</tr>";
	}
	mysqli_close($mysqli);
	?>
</table>
<div style="display: block; height: 20px;"></div>
<a href="tambah_ubah.php">Tambah</a>
<div style="display: block; height: 20px;"></div>
</body>
</html>