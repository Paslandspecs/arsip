<!DOCTYPE html>
<html>
	<head>
		<title>Cetak Qrcode Map</title>
	</head>
	<body>
		<hr>
		<h3 style="text-align:center;"><?= $cetak->map?></h3>
		<hr>
        <img src="<?= base_url('')?>upload/qrcode/<?= $cetak->qrcode?>" class="img-fluid mb-3 text-center" alt="<?= $cetak->qrcode?>">
		<hr>
		<p style="text-align:center;">Scan QRCODE di atas dan Anda dapat mencari semua dokumen yang tersedia di dalam Map ini.</p>
	</body>
</html>