<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>admin/images/favicon1.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?= base_url('assets/'); ?>admin/images/logo-dark copy.png" alt="logo">
                            </div>
                            <h4>Daftar untuk bisa melakukan konsultasi!</h4>
                            <form class="pt-3" method="post" enctype='multipart/form-data' action="auth/register">
                                <div class="form-group">
                                    <label for="nama" class="control-label sr-only">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="" placeholder="Nama Lengkap" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="control-label sr-only">Username</label>
                                    <input type="text" class="form-control" value="" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="usia" class="control-label sr-only">Usia</label>
                                    <input type="text" class="form-control" value="" placeholder="Usia" name="usia">
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="control-label sr-only">Alamat</label>
                                    <input type="text" class="form-control" value="" placeholder="Alamat" name="alamat">
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" value="2" placeholder="" name="role">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="" value="" placeholder="Password" name="password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Register</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Sudah punya akun? <a href="login" class="text-primary">Login disini</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/'); ?>admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/'); ?>admin/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/template.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/settings.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>