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
             <div class="row">
                 <div class="col-md-12">
                     <!-- alert eror -->
                     <?php if (validation_errors()) : ?>
                         <div class="alert alert-danger" role="alert">
                             <?= validation_errors(); ?>
                         </div>
                     <?php endif; ?>
                     <!-- alert berhasil -->
                     <?= $this->session->flashdata('message'); ?>
                     <div class="card">
                         <div class="card-header">
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#donaturmodal-lg">
                                 <i class="fas fa-plus"> </i>
                                 Tambah <?= $title; ?>
                             </a>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Nama</th>
                                         <th>Alamat</th>
                                         <th>No.Telp</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($donatur as $m) : ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $m['nama']; ?></td>
                                             <td><?= $m['alamat']; ?></td>
                                             <td><?= $m['no_telp']; ?></td>
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="<?= base_url('donatur/ubahDonatur/'); ?><?= $m['id']; ?>" class="btn btn-info">
                                                         <i class="fas fa-edit"> </i>
                                                         Ubah
                                                     </a>
                                                     <a href="<?= base_url('donatur/hapus/'); ?><?= $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin menghapus donatur?')">
                                                         <i class="fas fa-trash"> </i>
                                                         Hapus
                                                     </a>
                                                 </div>
                                             </td>
                                         </tr>
                                         <?php $i++ ?>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.card -->
                 </div>
             </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- modal -->
 <div class="modal fade" id="donaturmodal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Daftarkan Donatur Baru</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('donatur'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Nama Donatur</label>
                         <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama donatur">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Alamat Donatur</label>
                         <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat donatur">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">No.Telp Donatur</label>
                         <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No.telp donatur">
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>