<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="<?= base_url('assets/'); ?>admin/images/favicon1.png" rel="icon">
    <link href="<?= base_url('assets/'); ?>user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>user/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>user/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?= base_url('/'); ?>" class="logo"><img
                    src="<?= base_url('assets/'); ?>admin/images/logo-dark copy.png" alt=""></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?= site_url('/') ?>" class="<?= ($page == 'home') ? 'active' : '' ?>">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Data Depresi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= site_url('/depresi') ?>"
                                    class="<?= ($page == 'jenis_depresi') ? 'active' : '' ?>">Jenis Depresi</a></li>
                            <li><a href="<?= site_url('/gejala') ?>"
                                    class="<?= ($page == 'gejala_depresi') ? 'active' : '' ?>">Gejala Depresi</a></li>
                            <li><a href="<?= site_url('/kelompok') ?>"
                                    class="<?= ($page == 'diagnosa') ? 'active' : '' ?>">Diagnosa</a></li>
                        </ul>
                    </li>
                    <?php if ($this->session->logged_in === 'Sudah Loggin') : ?>
                    <li><a href="<?= site_url('/konsultasi') ?>"
                            class="<?= ($page == 'konsultasi') ? 'active' : '' ?>">Konsultasi</a></li>
                    <li><a href="<?= site_url('/riwayat') ?>"
                            class="<?= ($page == 'riwayat') ? 'active' : '' ?>">Riwayat</a></li>
                    <li><a href="<?= site_url('admin/logout') ?>"><button class="btn btn-danger">Logout</button></a>
                    </li>
                    <?php else : ?>
                    <li><a href="<?= site_url('/login') ?>">Konsultasi</a></li>
                    <li><a href="<?= site_url('/login') ?>"><button class="btn btn-primary">Login</button></a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->