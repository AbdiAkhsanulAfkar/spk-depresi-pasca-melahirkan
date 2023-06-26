      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Edit Gejala</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <form method="post" enctype='multipart/form-data' action="<?php echo site_url('/admin/posteditgejala') ?>">
                                              <div class="form-group" hidden>
                                                  <label for="gejala">id</label>
                                                  <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $gejala->id ?>">
                                              </div>
                                              <div class="form-group">
                                                  <label for="gejala">Gejala</label>
                                                  <input type="text" class="form-control" id="" placeholder="" name="gejala" value="<?= $gejala->gejala ?>">
                                              </div>
                                              <div class="form-group">
                                                  <label for="Mb">MB</label>
                                                  <input step="0.1" min="0" max="1" type="number" id="typeNumber" class="form-control" name="mb" value="<?= $gejala->mb ?>" />
                                                  <!-- <small id="error_help" class="form-text text-muted" style="color:red;">Silakan isi kolom gejala!!!</small>    -->
                                              </div>
                                              <div class="form-group">
                                                  <label for="Md">MD</label>
                                                  <input step="0.1" min="0" max="1" type="number" id="typeNumber" class="form-control" name="md" value="<?= $gejala->md ?>" />
                                              </div>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>