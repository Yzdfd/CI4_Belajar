<?= $this -> extend("layout/template"); ?>

<?= $this -> section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <h1>Daftar Komik</h1>
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
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/sampul.jpeg" class="sampul" alt=""></td>
                        <td>naruto</td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this -> endSection(); ?>