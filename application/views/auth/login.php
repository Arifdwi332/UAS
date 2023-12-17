<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>PAMS</b></a>
            <h5>Panti Asuhan Manajemen Sistem</h5>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Silahkan login!</p>

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?= set_value('password'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="row text-center mt-3">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="text-center mt-4">
                    <div class="col">
                        <a href="<?= base_url(); ?>Auth/registration" class="text-center">Daftarkan Akun</a>
                    </div>
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->