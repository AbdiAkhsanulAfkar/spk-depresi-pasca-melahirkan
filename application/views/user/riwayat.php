<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center  position-relative" data-aos="zoom-out">
        <h2 class="mb-5" style="font-size: 25px;">Berikut adalah riwayat konsultasi anda</h2>
        <table id="example" class="table table-striped table-bordered data" style="width:100%;margin-right:100px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="text-align: center;">Depresi</th>
                    <th style="text-align: center;">Kemungkinan</th>
                    <th style="text-align: center;">Tanggal konsultasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($riwayat as $d) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d->nama_depresi ?></td>
                        <td><?= $d->kemungkinan ?></td>
                        <td><?= $d->tanggal ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>