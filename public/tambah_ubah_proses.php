<?php
define('CFG', 'CFG');
include '../cfg.php';
$s = @$_POST['s'];
$id = @$_POST['id'];
$url_asli = @$_POST['url_asli'];
if($s == 'old'){
	$res = mysqli_query($mysqli, "UPDATE daftar_url SET url_asli = '$url_asli' WHERE id = '$id'");
	$tmp = mysqli_affected_rows($mysqli);
	if($tmp == 1){
		echo "Data lama berhasil diganti";
	}
	else{
		echo "Data lama gagal diganti";
	}
}
else{
	$res = mysqli_query($mysqli, "INSERT INTO daftar_url VALUES(null, UUID(), '$url_asli')");
	$tmp = mysqli_affected_rows($mysqli);
	if($tmp == 1){
		echo "Data baru berhasil disimpan";
	}
	else{
		echo "Data baru gagal disimpan";
	}
}
mysqli_close($mysqli);
?>
<div style="display: block; height: 20px;"></div>
<a href="index.php">Kembali</a>
<div style="display: block; height: 20px;"></div>