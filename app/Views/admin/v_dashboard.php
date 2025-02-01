<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rafhely</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Kurangi margin pada container */
        .content {
            margin-top: 20px; /* Atur jarak dari atas */
        }
    </style>
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container">
                    <!-- Header Section -->
                    <div class="text-center mb-3">
                        <h1 class="display-4">RAFHELY</h1>
                    </div>
                    
                    <!-- Jadwal Section -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="lapangan">Lapangan</label>
                                    <input type="text" id="lapangan" class="form-control" placeholder="Lapangan">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" id="tanggal" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Login Section -->
                    <div class="text-center mt-4">
                        <a href="<?= base_url('login');?>" class="btn btn-primary">Login</a>
                        <a href="<?= base_url('register');?>" class="btn btn-secondary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->