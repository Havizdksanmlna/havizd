<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
<h2 class="mb-5">Tambah Softcase</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-softcase/') ?>" enctype="multipart/form-data" method="POST">
        <div class="mb-3">
            <label for="nama">Nama Softcase</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label for="model_hp">Model HP</label>
            <input type="text" class="form-control" name="model_hp" id="model_hp">          
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-softcase') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>