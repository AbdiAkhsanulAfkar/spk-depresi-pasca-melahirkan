      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Edit Depresi</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/admin/posteditdepresi') ?>">
                                              <div class="form-group" hidden>
                                                  <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $depresi->id ?>">
                                              </div>
                                              <div class="form-group">
                                                  <label for="depresi">Depresi</label>
                                                  <input type="text" class="form-control" id="" placeholder="" name="depresi" value="<?= $depresi->nama_depresi ?>">
                                              </div>
                                              <div class="form-group">
                                                  <label for="detail">Detail</label>
                                                  <textarea type="text" class="form-control" id="" placeholder="" rows="3" name="detail"><?= $depresi->detail ?></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="solusi">Solusi</label>
                                                  <textarea class="form-control" id="" placeholder="" rows="3" name="solusi"><?= $depresi->solusi ?></textarea>
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