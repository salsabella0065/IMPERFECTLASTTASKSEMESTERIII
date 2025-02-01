<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        body {
            background: linear-gradient(135deg, #fbb03b, rgb(201, 165, 20)); /* Orange semi-kuning */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: rgb(230, 160, 48);
            border-color: rgb(230, 160, 48);
        }

        .btn-primary:hover {
            background-color: rgb(227, 150, 34);
            border-color: rgb(227, 150, 34);
        }
    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>Register</b> Form</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new account</p>

                <form action="<?php echo base_url('register/store'); ?>" method="POST">
                    
                    <!-- ID User -->
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="id_user" placeholder="ID User (Opsional)" />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-id-badge"></span></div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>

                    <!-- Username -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                    </div>

                    <!-- Nama -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-id-card"></span></div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>

                    <!-- Nomor HP -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP" required />
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-phone"></span></div>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-map-marker-alt"></span></div>
                        </div>
                    </div>

                    <!-- Jenis Member -->
                    <div class="input-group mb-3">
                        <select name="jenis_member" class="form-control" required>
                            <option value="" disabled selected>-- Pilih Jenis Member --</option>
                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-star"></span></div>
                        </div>
                    </div>

                    <!-- Id Role -->
                    <div class="input-group mb-3">
                        <select name="id_role" class="form-control" required>
                            <option value="" disabled selected>-- Pilih Role --</option>
                            <option value="1">Admin</option>
                            <option value="2">User Biasa</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user-tag"></span></div>
                        </div>
                    </div>

                    <!-- Tombol Register -->
                    <div class="row">
                        <div class="col-6">
                            <a href="<?= base_url('/'); ?>" class="btn btn-secondary btn-block">Back</a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
