<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5 text-center">Daftar Softcase</h2>

<div class="mb-3 text-end">
    <a href="<?= base_url('admin/daftar-softcase/tambah')?>" class="btn btn-primary btn-lg">
        <i class="bi bi-plus-circle me-2"></i>Tambah Softcase
    </a>
</div>

<div class="table-responsive mb-5">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Softcase</th>
                <th scope="col">Model HP</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($softcases as $softcase):?>
            <tr>
                <th scope="row"><?= $softcase['id'] ?></th>
                <td><?= $softcase['nama'] ?></td>
                <td><?= $softcase['model_hp'] ?></td>
                <td>
                    <img src="<?= base_url($softcase['gambar']) ?>" alt="Gambar Softcase" style="width: 150px; height: auto;">
                </td>
                <td><?= 'Rp ' . number_format($softcase['harga'], 0, ',', '.') ?></td>
                <td class="d-flex">
                    <a href="<?= base_url('admin/daftar-softcase/edit')?>/<?= $softcase['id'] ?>" class="btn btn-success me-2">
                        <i class="bi bi-pencil-square me-1"></i> Edit
                    </a>
                    <a href="<?= base_url('admin/daftar-softcase/hapus')?>/<?= $softcase['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus softcase ini?')">
                        <i class="bi bi-trash me-1"></i> Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>