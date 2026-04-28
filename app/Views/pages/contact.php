<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Contact</h1>
    <?php foreach($alamat as $a) : ?>
    <ul>
        <li><?= $a['tipe']; ?></li>
        <li><?= $a['jalan']; ?></li>
        <li><?= $a['kota']; ?></li>
        <li><?= $a['negara']; ?></li>
    </ul>
    <?php endforeach;?>
</div>
<?= $this->endSection(); ?>