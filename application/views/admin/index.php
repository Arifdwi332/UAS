 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><?= $title; ?></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active"><?= $title; ?></li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3><?= $jumlahDonasiBarang; ?></h3>

                             <p>Donasi Barang</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-cube"></i>
                             <ion-icon name="cube"></ion-icon>
                         </div>
                         <a href="<?= base_url('donasi/donasiBarang/'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3><?= $jumlahDonasiTunai; ?></h3>

                             <p>Donasi Tunai</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-cash"></i>
                         </div>
                         <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <h3><?= $jumlahDonatur; ?></h3>

                             <p>Donatur</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person"></i>
                         </div>
                         <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <?php
                                //get db tabel donasi tunai
                                $data['user'] = $this->db->get('user')->result_array();
                                //menghitung donasi tunai
                                $jumlahUser = count($data['user']);
                                ?>
                             <h3><?= $jumlahUser; ?></h3>

                             <p>User</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-person-add"></i>
                         </div>
                         <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>
         </div>
     </section>
     <!-- /.content -->
 </div>