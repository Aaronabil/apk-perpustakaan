<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Print</title>
 <!-- Normalize or reset CSS with your favorite library -->
 <link rel="stylesheet" href="<?= base_url ?>/dist/js/normalize.min.css">
 <!-- Load paper.css for happy printing -->
 <link rel="stylesheet" href="<?= base_url ?>/dist/css/paper.css">
 <!-- Set page size here: A5, A4 or A3 -->
 <!-- Set also "landscape" if you need -->
 <style type="text/css" media="print">
 @page 
 {
 size: auto; /* auto is the initial value */
 margin: 0mm; /* this affects the margin in the printer settings */
 }
</style>
 <style>
 .center {
 margin-right: auto;
 margin-left: auto;
 text-align: center;
 }
 h1 {
 font-size: 16px;
 }
 * {
 font-family: Calibri;
 font-size: 14px;
 -webkit-print-color-adjust:exact;
 }
 .table {
 border: solid 1px #DDEEEE;
 border-collapse: collapse;
 border-spacing: 0;
 font: normal 10px Arial, sans-serif;
 width: 95%;
}
.table thead th {
 background-color: #DDEFEF;
 border: solid 1px #DDEEEE;
 color: #336B6B;
 padding: 10px;
 text-align: center;
 text-shadow: 1px 1px 1px #fff;
}
.table tbody td {
 border: solid 1px #DDEEEE;
 color: #333;
 padding: 10px;
 text-shadow: 1px 1px 1px #fff;
}
</style>
</head>
<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 potrait">
 <!-- Each sheet element should have the class "sheet" -->
 <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
 <section class="sheet padding-15mm">
 <h1 class="center" style="text-decoration: bold;margin-top: 20px;">Data Peminjam</h1>
 <table class="table">
 <thead> 
 <tr>
 <table align="left" class="table table-bordered">
 <thead> 
 <tr align="center">
 <th class="align-middle">No</th>
 <th style="width: 10%" class="align-middle">Tanggal</th>
 <th style="width: 20%" class="align-middle">Nama</th>
 <th class="align-middle">Kelas</th>
 <th style="width: 25%" class="align-middle">Judul Buku</th>
 <th style="width: 5%" class="align-middle">Banyaknya</th>
 <th style="width: 10%" class="align-middle">Tanggal <br>Kembali</th>
 <th>Kategori Buku</th>
 <th style="width: 10%" class="align-middle">Keterangan</th>
 </tr>
 </thead>
 <tbody>    
 <?php $no=1; ?> 
 <?php foreach ($data['db_perpustakaan'] as $row) :?>
 <tr align="center">
 <td class="align-middle"><?= $no; ?></td>
 <td class="align-middle"><?= $row['tanggal'];?></td>
 <td class="align-middle"><?= $row['nama'];?></td>
 <td class="align-middle"><?= $row['kelas'];?></td>
 <td class="align-middle"><?= $row['judul_buku'];?></td>
 <td class="align-middle"><?= $row['banyaknya'];?></td>
 <td class="align-middle"><?= $row['tanggal_kembali'];?></td>
 <td align="center" class="align-middle"><div class="badge badge-warning" <?php if($row['kategori_id'] == 
$row['id']);?>><?= $row['nama_kategori'];?></div></td>
 <td class="align-middle"><?= $row['keterangan'];?></td>
 <?php $no++; endforeach; ?>
 </tbody>
 </table>
 </section>
<script type="text/javascript">
    window.addEventListener("load", window.print());
 //window.print();
</script>
</body>
</html