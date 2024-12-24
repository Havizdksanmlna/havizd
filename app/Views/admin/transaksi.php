<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5 text-center">Daftar Transaksi</h2>

<!-- Tabel Transaksi -->
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Fikri Basis</td>
                <td>15 Feb 2024 16.44 WIB</td>
                <td>Rp 250.000</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-arrow-repeat me-2"></i> Ubah Status
                    </a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">
                        <i class="bi bi-trash me-2"></i> Hapus
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>