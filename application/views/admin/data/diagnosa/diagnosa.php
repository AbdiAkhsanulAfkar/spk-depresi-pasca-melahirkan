      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title mb-4">Data Diagnosa</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="table-responsive">
                                              <a href="<?php echo site_url('/admin/tambahdiagnosa') ?>" class="btn btn-primary mb-3"><span>Tambah</span></a>
                                              <table id="example" class="display expandable-table table-striped" style="width:100%">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Depresi</th>
                                                          <th style="text-align: center;">Gejala</th>
                                                          <th>Mb</th>
                                                          <th>Md</th>
                                                          <th>CF</th>
                                                          <th>Aksi</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 1;
                                                        foreach ($kelompok as $d) : ?>
                                                          <tr>
                                                              <td><?= $no++ ?></td>
                                                              <td><?= $d->depresi ?></td>
                                                              <td><?= $d->gejala ?></td>
                                                              <td><?= $d->mb ?></td>
                                                              <td><?= $d->md ?></td>
                                                              <td><?= $d->mb - $d->md ?></td>
                                                              <td>
                                                                  <a href="<?php echo site_url('admin/hapusdiagnosa/' . $d->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="mdi mdi-delete"></i></a>
                                                                  <a href="<?php echo site_url('admin/editdiagnosa/' . $d->id) ?>" class="btn btn-success btn-sm"><i class="mdi mdi-border-color"></i></a>
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