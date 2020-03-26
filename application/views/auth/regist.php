<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a><img src="<?= base_url('assets/') ?>dist/img/logo7.png" alt=""></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="<?= base_url('auth/registration/') ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="username" name="username">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>


                    <div class="input-group mt-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Password" name="password1">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Retype password" name="password2">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-6 offset-3 mt-3 mb-2">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <a href="<?= base_url('auth') ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

</body>

</html>