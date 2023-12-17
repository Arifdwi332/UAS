<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>PAMS</b></a>
                <h5>Panti Asuhan Manajeman Sistem</h5>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Daftrakan akun</p>

                <form action="<?= base_url('auth/registration'); ?>" method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Nama lengkap" id="name" name="name" value="<?= set_value('name'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
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
                        <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Ulangi password" id="password2" name="password2">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="row mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="text-center mt-4">
                        <a href="<?= base_url(); ?>Auth" class="text-center">Sudah punya akun? Sillahkan login!</a>
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->