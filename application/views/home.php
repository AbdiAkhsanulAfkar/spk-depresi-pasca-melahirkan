  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang di <span>Sistem Pakar Depresi Pasca Melahirkan</span></h1>
      <div class="d-flex mt-3">
      <?php if ($this->session->logged_in === 'Sudah Loggin') : ?>
        <a href="<?= site_url('/konsultasi')?>" class="btn-get-started scrollto">Aku mau konsultasi!</a>
      <?php else:?>
        <a href="<?= site_url('/login')?>" class="btn-get-started scrollto">Aku mau konsultasi!</a>  
      <?php endif?>
      
      </div>
    </div>
  </section>