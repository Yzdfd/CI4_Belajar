<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data</h2>

            <form action="/komik/save" method="POST">
                <?= csrf_field(); ?>

                <!-- JUDUL -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= isset($validation['judul']) ? 'is-invalid' : ''; ?>"
                            id="judul" name="judul" value="<?= old('judul'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation['judul'] ?? ''; ?>
                        </div>
                    </div>
                </div>

                <!-- PENULIS -->
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= isset($validation['penulis']) ? 'is-invalid' : ''; ?>" id="penulis"
                            name="penulis" value="<?= old('penulis'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation['penulis'] ?? ''; ?>
                        </div>
                    </div>
                </div>

                <!-- PENERBIT -->
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= isset($validation['penerbit']) ? 'is-invalid' : ''; ?>"
                            id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation['penerbit'] ?? ''; ?>
                        </div>
                    </div>
                </div>

                <!-- SAMPUL -->
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= isset($validation['sampul']) ? 'is-invalid' : ''; ?>"
                            id="sampul" name="sampul" value="<?= old('sampul'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation['sampul'] ?? ''; ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>