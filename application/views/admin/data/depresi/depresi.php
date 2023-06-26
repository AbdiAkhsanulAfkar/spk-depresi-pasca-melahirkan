            <!-- partial -->
            <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title mb-4">Data Depresi</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="table-responsive">
                                          <a href="<?php echo site_url('/admin/tambahdepresi') ?>" class="btn btn-primary mb-3"><span>Tambah</span></a>
                                              <table id="example" class="display expandable-table table-striped" style="width:100%">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th style="text-align: center; width:25%">Jenis Depresi</th>
                                                          <th style="text-align: center; width:30%">Detail</th>
                                                          <th style="text-align: center;width:30%">Solusi</th>
                                                          <th style="text-align: center; width:10%">Aksi</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 1;
                                                        foreach ($depresi as $d) : ?>
                                                          <tr>
                                                              <td><?= $no++ ?></td>
                                                              <td><?= $d->nama_depresi ?></td>
                                                              <td style="text-align: center;"><?= $d->detail ?></td>
                                                              <td style="text-align: center;"><?= $d->solusi ?></td>
                                                              <td>
                                                                  <a href="<?php echo site_url('admin/hapusdepresi/' . $d->id) ?>" class="btn btn-danger btn tombol-hapus"><i class="mdi mdi-delete"></i></a>
                                                                  <a href="<?php echo site_url('admin/editdepresi/' . $d->id) ?>" class="btn btn-success btn"><i class="mdi mdi-border-color"></i></a>
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
      