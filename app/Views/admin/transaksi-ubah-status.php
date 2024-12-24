<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah Softcase</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-softcase/tambah')?>" method="POST">
        <div class="mb-3">
            <label for="judul">Judul softcase</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="pengarang">
        </div>
        <div class="mb-3">
            <label for="pengarang">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
            <label for="cover">Cover</label>
            <input type="file" name="cover" id="cover">
        </div>
        <div class="mb-3">
            <label for="tahun">Harga</label>
            <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-buku')?>" class="btn btn-secondary"></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>