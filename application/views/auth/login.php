<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a><img src="<?= base_url('assets/') ?>dist/img/logo7.png" alt=""></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                
                <?= $this->session->flashdata('message'); ?>
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="<?= base_url('auth') ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" name= "username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Password" name = "password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="row mt-3">
                        <div class="col-4">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block mb-2">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <p class="mb-1">
                    <a href="<?= base_url('auth/forgot') ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('auth/registration') ?>" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->


</body>

</html>