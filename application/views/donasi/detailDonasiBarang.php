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
             <!-- Profile Image -->
             <div class="card card-primary card-outline col-md-4">
                 <div class="card-body box-profile">
                     <ul class="list-group list-group-unbordered mb-3">
                         <li class="list-group">
                             <b>Id Donatur</b> <a class="float-right"><?= $donasiBarang['donatur_id']; ?></a>
                         </li>
                         <div class="row mt-3">
                             <div class="col">
                                 <li class="list-group">
                                     <b>Nama Barang</b> <a class="float-right"><?= $donasiBarang['nama_barang']; ?></a>
                                 </li>
                             </div>
                             <div class="col">
                                 <li class="list-group">
                                     <b>Jumlah Barang</b> <a class="float-right"><?= $donasiBarang['jumlah']; ?></a>
                                 </li>
                             </div>
                         </div>
                         <li class="list-group mt-3">
                             <b>Keterangan</b> <a class="float-right"><?= $donasiBarang['keterangan']; ?></a>
                         </li>
                         <li class="list-group mt-5">
                             <a href="<?= base_url('donasi/donasiBarang'); ?>" class="btn btn-primary">Ok</a>
                         </li>
                     </ul>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->
         </div>
     </section>
     <!-- /.content -->
 </div>