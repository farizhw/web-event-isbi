<?php ob_start(); ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak PDF</title>
    <style>
        table.tb {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }

        .tb th,
        .tb td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            height: 30px;
            vertical-align: bottom
        }

        img {
            width: 50px;
        }

        .judul {
            text-align: center;
        }

        .judul h4 {
            font-size: 40px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <?php
        // Load file koneksi.php
        include "../../konfig/koneksi.php";
        $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            // Buat query untuk menampilkan semua data transaksi
            $sql = "SELECT * FROM keg ORDER BY tglmulai ASC";
            $label = "Semua Data Kegiatan";
        }else{ // Jika terisi
            // Buat query untuk menampilkan data transaksi sesuai periode tanggal
            $sql = "SELECT * FROM keg WHERE (tglmulai BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."') ORDER BY tglmulai ASC";
            $tgl_awal = date('d-F-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-F-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        }
    ?>
    <div class="judul">
        <h4 style="margin-bottom: 5px;">Laporan Data Kegiatan ISBI Bandung</h4>
        <?php echo $label ?>
        <br /><br />
    </div>
    <table class="tb">
        <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Akhir</th>
            <th>Jenis</th>
            <th>Kategori</th>
            <th>Gambar</th>
        </tr>
        <?php 
            $hasil=mysqli_query($conn, $sql);
            $no=1;
            while ($d=mysqli_fetch_array($hasil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['judul_k'];?></td>
            <td><?php echo substr ($d['desk_k'], 0,20)." ..."; ?></td>
            <td><?php echo date('d-n-Y H:i',strtotime($d['tglmulai'])); ?></td>
            <td><?php echo date('d-n-Y H:i',strtotime($d['tglakhir'])); ?></td>
            <td><?php echo $d['jenis_k']; ?></td>
            <td style="text-align:center"><?php echo $d['kategori_k']; ?></td>
            <td align="center"><?php echo "<img src='../../images/$d[gambar_k]'>" ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require '../../assets/html2pdf/autoload.php';
$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Laporan Data Kegiatan ISBI Bandung.pdf', 'I');
?>