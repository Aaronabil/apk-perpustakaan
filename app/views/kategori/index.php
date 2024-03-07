    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $data['title']; ?></>
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
            <a href="<?= base_url; ?>/kategori/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="card-body">

        <form action="<?= base_url; ?>/kategori/cari" method="post">
    <div class="row mb-3">
        <div class="col-lg-6">
            
        </div>
    </div>
        </form>
            <table class="table table-bordered">
                <thead> 
                    <tr align="center">
                        <th style="width: 10px">#</th>
                        <th>Kategori</th>
                        <th style="width: 150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?> 
                    <?php foreach ($data['kategori'] as $row) :?>
                    <tr>
                        <td align="center"><?= $no; ?></td>
                        <td><?= $row['nama_kategori'];?></td>
                        <td align="center" class="align-middle">
                            <a href="<?= base_url; ?>/kategori/hapus/<?= $row['id'] ?>" class="badge 
                            badge-danger" onclick="return confirm('Anda yakin akan menghapus kategori ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
                        Halaman 3
                    </div>
<!-- /.card-body -->
    </div>
<!-- /.card -->
        </section>
<!-- /.content -->
    </div>
<!-- /.content-wrapper -->