<section id="hero-animated" class="hero-animated d-flex ">
    <div class="container d-flex flex-column text-center position-relative" data-aos="zoom-out">
        <h2 class="mb-5" style="font-size: 25px;">Silahkan isi gejala apa saja yang dirasakan</h2>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
        <table id="" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="text-align: center; width:50%;">Gejala</th>
                    <th style="text-align: center;">Pilih kondisi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kelompok as $d) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/hitung') ?>">
                            <div class="form-group">
                                <td>
                                    <?= $d->gejala ?>
                                    <input type="hidden" class="form-control" value="<?= $d->id ?>" name="gejala[]">
                                    <input type="hidden" class="form-control" value="<?= $d->cf ?>" name="cf[]">
                                </td>
                                <td>
                                    <select class="form-select" name="kondisi[]">
                                        <option value="0.0">Silakan Pilih</option>
                                        <option value="0">Saya tidak merasakannya sama sekali</option>
                                        <option value="0.2">Saya tidak merasakannya</option>
                                        <option value="0.4">Saya sedikit merasakannya</option>
                                        <option value="0.6">Terkadang saya merasakannya</option>
                                        <option value="0.8">Saya merasakannya</option>
                                        <option value="1">Saya sangat merasakannya</option>
                                    </select>
                            </div>
                            </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</section>
