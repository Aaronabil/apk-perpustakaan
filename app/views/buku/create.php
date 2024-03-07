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
<div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title"><?= $data['title']; ?></h3>
 </div>
 <!-- /.card-header -->
 <!-- form start -->
 <form role="form" action="<?= base_url; ?>/buku/simpanbuku" method="POST" 
enctype="multipart/form-data">
 <div class="card-body">
 <div class="form-group">
 <label >Tanggal</label>
 <input type="date" class="form-control" placeholder="" 
name="tanggal">
</div>
<div class="form-group">
 <label >Nama</label>
 <input type="text" class="form-control" placeholder="Masukkan nama anda..." 
name="nama" autocomplete="off">
 </div>
 <div class="form-group">
 <label >Kelas</label>
 <select class="form-control" name="kelas">
 <option value="">Pilih</option>
 <option value="7A">7A</option>
 <option value="7B">7B</option>
 <option value="7C">7C</option>
 <option value="7D">7D</option>
 <option value="7E">7E</option>
 <option value="7F">7F</option>
 <option value="7G">7G</option>
 <option value="7H">7H</option>
 <option value="7I">7I</option>
 <option value="7J">7J</option>
 <option value="7K">7K</option>
 <option value="8A">8A</option>
 <option value="8B">8B</option>
 <option value="8C">8C</option>
 <option value="8D">8D</option>
 <option value="8E">8E</option>
 <option value="8F">8F</option>
 <option value="8G">8G</option>
 <option value="8H">8H</option>
 <option value="8I">8I</option>
 <option value="8J">8J</option>
 <option value="9A">9A</option>
 <option value="9B">9B</option>
 <option value="9C">9C</option>
 <option value="9D">9D</option>
 <option value="9E">9E</option>
 <option value="9F">9F</option>
 <option value="9G">9G</option>
 <option value="9H">9H</option>
 <option value="9I">9I</option>
 <option value="9J">9J</option>
 </select>
 </div>
 <div class="form-group">
 <label >Judul Buku</label>
 <input type="text" class="form-control" autocomplete="off" placeholder="Masukkan judul buku..." 
name="judul_buku">
 </div>
 <div class="form-group">
 <label >Banyaknya</label>
 <input type="number" class="form-control" placeholder="Masukkan banyak buku..." 
name="banyaknya">
 </div>
 <div class="form-group">
 <label >Tanggal Kembali</label>
 <input type="date" class="form-control" placeholder="masukkan judul buku..." 
name="tanggal_kembali">
 </div>
 <div class="form-group">
 <label >Kategori Buku</label>
 <select class="form-control" name="kategori_id">
 <option value="">Pilih</option>
 <?php foreach ($data['kategori'] as $row) :?>
 <option value="<?= $row['id']; ?>"><?= $row['nama_kategori']; ?></option>
 <?php endforeach; ?>
 </select>
 </div>
 <div class="form-group">
 <label >Keterangan</label><br>
 <input type="radio" value="Belum Dikembalikan" name="keterangan">Belum Dikembalikan &nbsp;
 <input type="radio" value="Sudah Dikembalikan" name="keterangan">Sudah Dikembalikan
 </div>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </form>
 </div>
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
