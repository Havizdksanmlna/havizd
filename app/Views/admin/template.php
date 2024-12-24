<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Toko Softcase Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark text-white p-4">
                <h3 class="mb-4">Admin</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/dashboard')?>" class="nav-link text-white">
                            <i class="bi bi-house-door me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/daftar-softcase')?>" class="nav-link text-white">
                            <i class="bi bi-box me-2"></i> Daftar Softcase
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/transaksi')?>" class="nav-link text-white">
                            <i class="bi bi-credit-card me-2"></i> Transaksi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/pelanggan')?>" class="nav-link text-white">
                            <i class="bi bi-person me-2"></i> Pelanggan
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center p-4">
                    <h2 class="mb-0">Admin Dashboard</h2>
                    <a href="<?= base_url('logout')?>" class="btn btn-secondary">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
                <div class="container">
                    <?= $this->renderSection('main'); ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container text-center">
            &copy; 2024. Toko Softcase Online. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>