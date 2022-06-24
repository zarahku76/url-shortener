<?php
define('CFG', 'CFG');
include '../cfg.php';
$url_pendek = @$_GET['u'];
$res = mysqli_query($mysqli, "SELECT url_asli FROM daftar_url WHERE url_pendek = '$url_pendek'");
$tmp = mysqli_num_rows($res);
if($tmp == 1){
	$res = mysqli_fetch_assoc($res);
	$url_asli = @$res['url_asli'];
}
else{
	echo "Maaf, Url anda tidak valid!";
	die();
}
mysqli_close($mysqli);
?>
<title>Menunggu</title>
<h1>
	Iklan
</h1>
<div style="display: block; height: 20px;"></div>
<p> URL siap dalam : <span id="countdowntimer" style="font-size: 30px; font-weight: bold;">10 </span> detik</p>
<a href="<?= $url_asli ?>" style="display: none; padding: 10px; background-color: #EEE; border: 1px solid #222; border-radius: 10px;" id="skip">
	Skip Adds
</a>
<div style="display: block; height: 20px;"></div>
Kunjungi Website Kami : <a href="https://www.zarah.my.id/" target="_blank">Zarah</a>
<div style="display: block; height: 20px;"></div>
Instagram : <a href="https://www.instagram.com/zarahku69/" target="_blank">@zarahku69</a>
<div style="display: block; height: 20px;"></div>
<img src="g3782.png" style="width: 100%; max-width: 300px; display: block;">
<script>
	var timeleft = 10;
	var downloadTimer = setInterval(function(){
		timeleft--;
		document.getElementById("countdowntimer").textContent = timeleft;
		if(timeleft <= 0)
			clearInterval(downloadTimer);
		if(timeleft == 0)
			document.getElementById("skip").style.display = 'inline-block';
	},1000);
</script>
