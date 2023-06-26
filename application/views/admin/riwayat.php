      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title mb-4">Data Riwayat Konsultasi</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12">
                                          <table class="mb-3" border="0" cellspacing="5" cellpadding="5">
                                              <tbody>
                                                <h5>Cari berdasarkan tanggal</h5>
                                                  <tr>
                                                      <td>Masukan tanggal Awal:</td>
                                                      <td><input type="text" id="min" name="min"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Masukan tanggal Akhir:</td>
                                                      <td><input type="text" id="max" name="max"></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <div class="table-responsive">
                                              <table id="example" class="display expandable-table table-striped"
                                                  style="width:100%">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Nama</th>
                                                          <th>Usia</th>
                                                          <th>Alamat</th>
                                                          <th>Jenis Depresi</th>
                                                          <th>Kemungkinan</th>
                                                          <th>Tanggal</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 1;
                                                        foreach ($riwayat as $r) : ?>
                                                      <tr>
                                                          <td><?= $no++ ?></td>
                                                          <td><?= $r->nama ?></td>
                                                          <td><?= $r->usia ?></td>
                                                          <td><?= $r->alamat ?></td>
                                                          <td><?= $r->nama_depresi ?></td>
                                                          <td><?= $r->kemungkinan * 100 ?> %</td>
                                                          <td><?= $r->tanggal ?></td>
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