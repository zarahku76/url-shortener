<?php
define('CFG', 'CFG');
include '../cfg.php';
$title = 'Tambah';
$s = @$_GET['s'];
$id = @$_GET['id'];
$url_pendek = $url_asli = null;
if($s == 'old'){
	$title = 'Ubah';
	$res = mysqli_query($mysqli, "SELECT * FROM daftar_url WHERE id='$id'");
	$tmp = mysqli_num_rows($res);
	if($tmp == 1){
		$res = mysqli_fetch_assoc($res);
		$id = $res['id'];
		$url_pendek = $res['url_pendek'];
		$url_asli = $res['url_asli'];
	}
	else{
		echo "Data tidak ditemukan";
		exit();
	}
	mysqli_close($mysqli);
}
else{
	$s = 'new';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?> URL</title>
</head>
<body>
<form action="tambah_ubah_proses.php" method="POST">
	<input type="hidden" name="s" value="<?= $s ?>" />
	<input type="hidden" name="id" value="<?= $id ?>" />
	<input type="text" name="url_pendek" value="<?= $url_pendek ?>" placeholder="URL Pendek / digenerate Otomatis" disabled />
	<input type="text" name="url_asli" value="<?= $url_asli ?>" placeholder="URL Asli" />
	<input type="submit" name="submit" value="<?= $title ?>" />
	<a href="index.php">Kembali</a>
</form>
</body>
</html>