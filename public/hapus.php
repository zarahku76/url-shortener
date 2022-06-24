<?php
define('CFG', 'CFG');
include '../cfg.php';
$id = @$_GET['id'];
$res = mysqli_query($mysqli, "DELETE FROM daftar_url WHERE id = '$id'");
$tmp = mysqli_affected_rows($mysqli);
mysqli_close($mysqli);
if($tmp){
	echo "Data berhasil di hapus";
}
else{
	echo "Data gagal di hapus";
}
?>
<div style="display: block; height: 20px;"></div>
<a href="index.php">Kembali</a>
<div style="display: block; height: 20px;"></div>