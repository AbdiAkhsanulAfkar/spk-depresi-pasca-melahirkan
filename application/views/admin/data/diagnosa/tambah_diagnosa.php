      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Tambah Diagnosa</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/admin/posttambahdiagnosa') ?>">
                                              <div class="form-group">
                                                  <label class="">Pilih Depresi</label>
                                              </div>
                                              <?php foreach ($depresi as $d) : ?>
                                                  <div class="checkbox">
                                                      <label class="checkbox">
                                                          <input type="checkbox" id="depresi" name="depresi[]" value="<?= $d->id ?>"> <?= $d->nama_depresi ?>
                                                      </label>
                                                  </div>
                                              <?php endforeach; ?>
                                              <div class="form-group mt-4">
                                                  <label class="">Pilih Gejala</label>
                                                  <select class="form-control" name="gejala[]">
                                                      <?php foreach ($gejala as $d) : ?>
                                                          <option value="<?= $d->id ?>"><?= $d->gejala ?></option>
                                                      <?php endforeach; ?>
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>