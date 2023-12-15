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
                 <div class="col-md-6">
                     <!-- alert eror -->
                     <?= form_error(
                            'menu',
                            '<div class="alert alert-danger" role="alert">',
                            '</div>'
                        ); ?>
                     <!-- alert berhasil -->
                     <?= $this->session->flashdata('message'); ?>
                     <div class="card">
                         <div class="card-header">
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                                 <i class="fas fa-plus"> </i>
                                 Tambah Menu
                             </a>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Menu</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($menu as $m) : ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $m['menu']; ?></td>
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="#" class="btn btn-info">
                                                         <i class="fas fa-edit"> </i>
                                                         edit
                                                     </a>
                                                     <a href="<?= base_url('menu/hapus/'); ?><?= $m['id']; ?>" class="btn btn-danger">
                                                         <i class="fas fa-trash" onclick="return confirm('Yakin menghapus sub menu?')"> </i>
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
 <div class="modal fade" id="modal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Menu Baru</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Nama menu</label>
                         <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama menu">
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
 <!-- /.modal -->