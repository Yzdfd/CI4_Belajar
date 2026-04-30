<?= $this -> extend("layout/template"); ?>

<?= $this -> section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <!-- Create merupakan method yang berfungsi untuk menampilkan form untuk insert data -->
            <a href="/komik/create" class="btn btn-primary">Tambah Komik +</a>
            <h1>Daftar Komik</h1>

            <!-- Buat nampilin flash data -->
            <?php if(session()->getFlashdata('pesan')) :?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <!-- Flash data selsai -->

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k): ?>
                    <tr>
                        <th scope="row"><?=  $i++; ?></th>
                        <td><img src="/img/<?= $k["sampul"];?>" class="sampul" alt=""></td>
                        <td><?= $k["judul_komik"]; ?></td>
                        <td>
                            <a href="/komik/detail/<?= $k["slug"]; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this -> endSection(); ?>