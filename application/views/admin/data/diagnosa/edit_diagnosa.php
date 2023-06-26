      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Edit Diagnosa</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/admin/posteditdiagnosa') ?>">
                                              <?php foreach ($depresi as $d) : ?>
                                                  <div class="form-group" hidden>
                                                      <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $d->id ?>">
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="">Pilih Gejala</label>
                                                      <select class="form-control" name="gejala">
                                                          <option value="<?= $d->id ?>"><?= $d->gejala ?></option>
                                                      <?php endforeach; ?>
                                                      <?php foreach ($gejala as $g) : ?>
                                                          <option value="<?= $g->id ?>"><?= $g->gejala ?></option>
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