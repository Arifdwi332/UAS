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
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#submodal-lg">
                                 <i class="fas fa-plus"> </i>
                                 Tambah Sub Menu
                             </a>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Title</th>
                                         <th>Menu</th>
                                         <th>Url</th>
                                         <th>Icon</th>
                                         <th>Active</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($subMenu as $sm) : ?>
                                         <tr>
                                             <td><?= $i; ?></td>
                                             <td><?= $sm['title']; ?></td>
                                             <td><?= $sm['menu']; ?></td>
                                             <td><?= $sm['url']; ?></td>
                                             <td><?= $sm['icon']; ?></td>
                                             <td><?= $sm['is_active']; ?></td>
                                             <td>
                                                 <div class="btn-group">
                                                     <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ubahmodal-lg">
                                                         <i class="fas fa-edit"> </i>
                                                         Ubah
                                                     </a>
                                                     <a href="<?= base_url('menu/hapusSubmenu/'); ?><?= $sm['id']; ?>" class="btn btn-danger">
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
 <!-- modal tambah sub menu-->
 <div class="modal fade" id="submodal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Sub Menu Baru</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu/submenu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Nama Submenu</label>
                         <input type="text" class="form-control" id="title" name="title" placeholder="Nama submenu">
                     </div>
                     <div class="form-group">
                         <div class="form-group">
                             <label>Menu</label>
                             <select class="form-control" name="menu_id" id="menu_id">
                                 <option>Pilih Menu</option>
                                 <?php foreach ($menu as $m) : ?>
                                     <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Icon Submenu</label>
                         <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon submenu">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Url Submenu</label>
                         <input type="text" class="form-control" id="url" name="url" placeholder="Url submenu">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Is Active</label>
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                             <label class="form-check-label" for="is_active">Aktif ?</label>
                         </div>
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