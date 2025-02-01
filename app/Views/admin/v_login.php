<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login Page">
    <meta name="author" content="AdminLTE">
    <title>Login - AdminLTE</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #fbb03b, rgb(247, 178, 17)); /* Orange semi-kuning */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: rgb(185, 128, 12);
            border-color: rgb(185, 128, 12);
        }

        .btn-primary:hover {
            background-color: rgb(232, 98, 26);
            border-color: #e65100;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b> Page</a>
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <!-- Flash Messages -->
                <?php if (session()->getFlashdata('gagal')) : ?>
                    <div class="alert alert-warning">
                        <?= esc(session()->getFlashdata('gagal')) ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('berhasil')) : ?>
                    <div class="alert alert-success">
                        <?= esc(session()->getFlashdata('berhasil')) ?>
                    </div>
                <?php endif; ?>

                <!-- Login Form -->
                <form action="<?= base_url('dashboard_alogin/cek_login') ?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="inputUsername" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <!-- Register Link -->
                <p class="mb-0 mt-3 text-center">
                    <a href="<?= base_url('register'); ?>">Need an account? Sign up!</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
