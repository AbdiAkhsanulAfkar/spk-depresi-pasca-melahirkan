      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Tambah Depresi</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/admin/post') ?>">
                                              <div class="form-group">
                                                  <label for="depresi">Depresi</label>
                                                  <input type="text" class="form-control" id="" placeholder="" name="depresi">
                                              </div>
                                              <div class="form-group">
                                                  <label for="detail">Detail</label>
                                                  <textarea type="text" class="form-control" id="" placeholder="" rows="3" name="detail"></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="solusi">Solusi</label>
                                                  <textarea class="form-control" id="" placeholder="" rows="3" name="solusi"></textarea>
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