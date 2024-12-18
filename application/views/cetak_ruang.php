<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Qrcode Ruang</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
            }
            .qrcode-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 20px 0;
            }
            img {
                /* max-width: 200px; /Sesuaikan ukuran QR code jika diperlukan */
                height: auto;
            }
        </style>
    </head>
    <body>
        <hr>
        <h3><?= $cetak->ruang ?></h3>
        <hr>
        <div class="qrcode-container">
            <img src="<?= base_url('') ?>upload/qrcode/<?= $cetak->qrcode ?>" 
                 alt="<?= $cetak->qrcode ?>" 
                 class="img-fluid mb-3">
        </div>
        <hr>
        <p>Scan QRCODE di atas dan Anda dapat mencari semua dokumen yang tersedia di dalam ruangan ini.</p>
    </body>
</html>

