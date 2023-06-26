<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center  position-relative" data-aos="zoom-out">
        <h2 class="mb-5" style="font-size: 25px;">Hasil Diagnosa</h2>
        <?php foreach ($kesimpulan as $d) : ?>
            <h1 class="mb-4 text-center" style="font-size: 35px;"><b>Sekitar <span class="text-danger"><?= $d->hasil * 100 ?>%</span> kemungkinan, anda mengalami depresi <span class="text-danger"> <?= $d->nama_depresi ?><span></b></h2>
                <h1 class="mt-4">Detail</h2>
                    <p><?= $d->detail ?></p>
                    <h1>Solusi</h2>
                        <p><?= $d->solusi ?></p>
                    <?php endforeach; ?>
                    <a href="<?php echo site_url('/konsultasi') ?>" class="btn btn-primary" style="margin-top:20px"><span>Ulang konsultasi</span></a>
    </div>
</section>