<?php
$table = 'buku';
$db;
$this->db = new Database; 
$Database = 'db_perpustakaan';
?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <h1><?=$data['title']; ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?=$data['title']; ?></h3>
                    </div>
                    <div class="card-body">
                    <div class="row">
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>Peminjam Buku</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="<?= base_url; ?>/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>11</h3>

                <p>Kategori Buku</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book-bookmark"></i>
              </div>
              <a href="<?= base_url; ?>/kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3.472</h3>

                <p>Jumlah Judul</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-tags"></i>
              </div>
              <a href="<?= base_url; ?>/keadaanbuku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>15.440</h3>

                <p>Jumlah Buku</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="<?= base_url; ?>/keadaanbuku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
        
        
        
        
        

        
          <br><p style="font-family: poppins;">Made with <i class="fa-regular fa-heart"></i> By :</p><br>
        <div class="row">
           <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-dark">
                <h5 class="widget-user-username"><b>Muhamad Nabil F.A</b></h5>
                <h5 class="widget-user-desc">Ketua</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Nabil.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div style="background-color: #39cccc; color: white;"  class="widget-user-header">
                <h5 class="widget-user-username"><b>Abdillah Sinatria</b></h5>
                <h5 class="widget-user-desc">Anggota</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Abdillah.S.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-info">
                <h5 class="widget-user-username"><b>Nadia Aprimaulidia</b></h5>
                <h5 class="widget-user-desc">Anggota</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Nadia.A.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div> 
           
      </div>

      <div class="row">
      <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div style="background-color: #C8A7E8; color: white;" class="widget-user-header">
                <h5 class="widget-user-username"><b>Reni Putri H.</b></h5>
                <h5 class="widget-user-desc">Anggota</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Reni.P.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-primary">
                <h5 class="widget-user-username"><b>Silvia Sri L.</b></h5>
                <h5 class="widget-user-desc">Anggota</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Silvia.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div style="background-color: #F7ABD4; color: white;" class="widget-user-header">
                <h5 class="widget-user-username"><b>Siti Kamilaeni</b></h5>
                <h5 class="widget-user-desc">Anggota</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/Siti.k.png" alt="User">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">SMKN 2 KUNINGAN</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
      </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Halaman 1
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        