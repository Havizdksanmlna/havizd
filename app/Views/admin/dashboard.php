<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5 text-center text-primary">Dashboard</h2>

<div class="row mb-5">
    <!-- Card Total Pendapatan -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow-lg rounded border-0 bg-success text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-0">Total Pendapatan</h5>
                    <h3 class="display-5 fw-bold">Rp150.000.000</h3>
                </div>
                <div>
                    <i class="bi bi-cash-stack display-1"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Transaksi -->
    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded border-0 bg-primary text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-0">Total Transaksi</h5>
                    <h3 class="display-5 fw-bold">145</h3>
                </div>
                <div>
                    <i class="bi bi-cart-check display-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Row for Insights -->
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded border-0 bg-warning text-dark">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-0">Pelanggan Baru</h5>
                    <h3 class="display-5 fw-bold">27</h3>
                </div>
                <div>
                    <i class="bi bi-people display-1"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded border-0 bg-danger text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-0">Pesanan Tertunda</h5>
                    <h3 class="display-5 fw-bold">1</h3>
                </div>
                <div>
                    <i class="bi bi-hourglass-split display-1"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card shadow-lg rounded border-0 bg-info text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-0">Feedback Baru</h5>
                    <h3 class="display-5 fw-bold">12</h3>
                </div>
                <div>
                    <i class="bi bi-chat-dots display-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
