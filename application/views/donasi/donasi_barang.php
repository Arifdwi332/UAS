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
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#donasibarangmodal-lg">
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
                                         <th>Nama Donatur</th>
                                         <th>Nama Barang</th>
                                         <th>Jumlah</th>
                                         <th>Keterangan</th>
                                         <th>Cetak</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($donasiBarang as $m) : ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $m['nama']; ?></td>
                                             <td><?= $m['nama_barang']; ?></td>
                                             <td><?= $m['jumlah']; ?></td>
                                             <td><?= $m['keterangan']; ?></td>
                                             <td>
                                                 <a href="<?= base_url('donasi/cetakDonasiBarang/'); ?><?= $m['id']; ?>" class="btn btn-success" rel="noopener" target="_blank">
                                                     <i class="fas fa-print"> </i>
                                                     Cetak
                                                 </a>
                                             </td>
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="<?= base_url('donasi/detailDonasiBarang/'); ?><?= $m['id']; ?>" class="btn btn-warning">
                                                         <i class="fas fa-eye"> </i>
                                                         Detail
                                                     </a>
                                                     <a href="#" class="btn btn-info">
                                                         <i class="fas fa-edit"> </i>
                                                         Edit
                                                     </a>
                                                     <a href="<?= base_url('donasi/donasiBarangHapus/'); ?><?= $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin menghapus donasi barang?')">
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
 <!-- modal-->
 <div class="modal fade" id="donasibarangmodal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah <?= $title; ?> Baru</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('donasi/donasiBarang'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label>Nama Donatur</label>
                         <select class="form-control" name="donatur_id" id="donatur_id">
                             <option>Pilih Nama</option>
                             <?php foreach ($donatur as $m) : ?>
                                 <option value="<?= $m['id']; ?>"><?= $m['nama']; ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="row mt-5">
                         <div class="col-8">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Nama Barang</label>
                                 <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                             </div>
                         </div>
                         <div class="col-4">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Jumlah</label>
                                 <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Nama submenu">
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Keterangan</label>
                         <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="keterangan"></textarea>
                     </div>
                 </div>
                 <div class=" modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
             </form>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 <!-- /.modal -->