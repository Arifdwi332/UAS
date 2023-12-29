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
                <form action="" method="post">
                    <div class="card-body box-profile">
                        <input type="hidden" name="id" value="<?= $donatur['id']; ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Donatur</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $donatur['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Donatur</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $donatur['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No.Telp Donatur</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $donatur['no_telp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah data</button>
                        </div>
                    </div>
                </form>

                <!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
     
</div>