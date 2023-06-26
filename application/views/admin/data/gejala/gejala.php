      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title mb-4">Data Gejala</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="table-responsive">
                                          <a href="<?php echo site_url('/admin/tambahgejala') ?>" class="btn btn-primary mb-3"><span>Tambah</span></a>
                                              <table id="example" class="display expandable-table table-striped" style="width:100%">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Gejala</th>
                                                          <th>Aksi</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 1;
                                                        foreach ($gejala as $d) : ?>
                                                          <tr>
                                                              <td><?= $no++ ?></td>
                                                              <td><?= $d->gejala ?></td>
                                                              <td>
                                                                  <a href="<?php echo site_url('admin/hapusgejala/' . $d->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="mdi mdi-delete"></i></a>
                                                                  <!-- <a type="button" class="btn btn-danger sm" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="lnr lnr-trash"></i> Hapus</a> -->
                                                                  <a href="<?php echo site_url('admin/editgejala/' . $d->id) ?>" class="btn btn-success btn-sm"><i class="mdi mdi-border-color"></i></a>
                                                              </td>
                                                          </tr>
                                                      <?php endforeach; ?>
                                                  </tbody>
                                              </table>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>