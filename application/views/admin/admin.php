      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Dashboard</p>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Admin</p>
                                                  <p class="fs-30 mb-2"><?= $admin ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Pengguna</p>
                                                  <p class="fs-30 mb-2"><?= $user ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Gejala</p>
                                                  <p class="fs-30 mb-2"><?= $gejala ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Depresi</p>
                                                  <p class="fs-30 mb-2"><?= $depresi ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Diagnosa</p>
                                                  <p class="fs-30 mb-2"><?= $rules ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-4 stretch-card transparent">
                                          <div class="card card-dark-blue">
                                              <div class="card-body">
                                                  <p class="mb-4">Total Konsultasi</p>
                                                  <p class="fs-30 mb-2"><?= $konsultasi ?></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Rekap data konsultasi user berdasarkan usia</p>
                              <div class="container">
                                  <div class="row">
                                      <canvas id="chart-usia"></canvas>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Rekap data konsultasi user berdasarkan alamat</p>
                              <div class="container">
                                  <div class="row">
                                      <canvas id="chart-alamat"></canvas>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title">Rekap data konsultasi user berdasarkan depresi yang dialami</p>
                                      <canvas id="chart-depresi"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
          </div>