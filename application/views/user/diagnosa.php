<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center  position-relative" data-aos="zoom-out">
        <h2 class="mb-5" style="font-size: 25px;">Berikut adalah jenis - jenis diagnosa depresi pasca melahirkan menurut pakar</h2>
        <table class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Depresi</th>
                    <th style="text-align: center;">Gejala</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kelompok as $d) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d->depresi ?></td>
                        <td><?= $d->gejala ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>