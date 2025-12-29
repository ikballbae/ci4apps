<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">KODE</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $p['kode']; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td><img src="/img/<?= $p['gambar']; ?>" alt="" class="gambar" width="100"></td>
                            <td>
                                <a href="/pages/produk/detail/<?= $p['kode']; ?>" class="btn btn-success">Detail</a>
                            </td>
                            <td>
                                <a href="/pages/produk/edit/<?= $p['kode']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="/pages/produk/delete/<?= $p['kode']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
