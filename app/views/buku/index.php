<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><?= $data['title']; ?></h1>
 </div>
 </div>
 </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
<div class="row">
 <div class="col-sm-12">
 <?php
 Flasher::Message();
 ?>
 </div>
 </div>
 <!-- Default box -->
 <div class="card">
 <div class="card-header">
    <h3 class="card-title"><?= $data['title'] ?></h3> 
    <div class="btn-group float-right">
        <a href="<?= base_url; ?>/buku/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Peminjam</a>&nbsp&nbsp&nbsp
        <a href="<?= base_url;?>/buku/print" class="btn float-right btn-xs btn btn-danger">Print</a>
</div>
 </div>
 <div class="card-body">
 
 <form action="<?= base_url; ?>/buku/cari" method="post">
<div class="row mb-3">
 <div class="col-lg-6">
 <div class="input-group">
 <input type="text" class="form-control" placeholder="Search Keyword..." name="key" autocomplete="off">
 <div class="input-group-append">
 <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
 <a class="btn btn-outline-danger" href="<?= base_url; ?>/buku" >Reset</a>
 </div>
 </div>
 </div>
</div>
 </form>

<p>Jumlah Peminjam Buku : <?php $hitungData; ?></p>
 
 <table class="table table-bordered">
 <thead> 
 <tr align="center">
 <th class="align-middle">No</th>
 <th style="width: 15%" class="align-middle">Tanggal</th>
 <th style="width: 50%" class="align-middle">Nama</th>
 <th class="align-middle">Kelas</th>
 <th style="width: 35%" class="align-middle">Judul Buku</th>
 <th style="width: 5%" class="align-middle">Banyaknya</th>
 <th style="width: 15%" class="align-middle">Tanggal Kembali</th>
 <th>Kategori Buku</th>
 <th class="align-middle">Keterangan</th>
 <th style="width: 120px" class="align-middle">Action</th>
 </tr>
 </thead>
 <tbody>    
 <?php $no=1; ?> 
 <?php foreach ($data['buku'] as $row) :?>
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
 <td align="center" class="align-middle">
 <a href="<?= base_url; ?>/buku/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> <a href="<?= base_url; ?>/buku/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
 </td>
 </tr>
 <?php $no++; endforeach; ?>
 </tbody>
 </table>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
 <div class="card-footer">
                        Halaman 4
                    </div>
 </div>
 <!-- /.card-footer-->
 </div>
 <!-- /.card -->
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->