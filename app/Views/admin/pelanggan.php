<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5 text-center">Daftar Pelanggan</h2>

<!-- Tabel Pelanggan -->
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Fikri Basis</td>
                <td>085263714499</td>
                <td>Mayang, Jambi</td>
                <td>
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">
                        <i class="bi bi-trash me-2"></i> Hapus
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
