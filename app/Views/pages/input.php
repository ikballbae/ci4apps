<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">

            <h2>FORM TAMBAH PRODUK</h2>

            <form action="/produk/simpan" method="post">

                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">KODE</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">HARGA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">DESKRIPSI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">GAMBAR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">SIMPAN</button>

            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
