<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$title?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/mdi/css/materialdesignicons.min.css">
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link href="<?= base_url('assets/'); ?>admin/images/favicon1.png" rel="icon">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>admin/js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo mr-5" href="<?= base_url('/admin/home'); ?>" class="logo"><img src="<?= base_url('assets/'); ?>admin/images/logo-dark copy.png" alt="" style="margin-left: 20px;"></a>        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
              <a class="btn btn-danger update-pro" href="<?php echo site_url('admincontroller/logout') ?>" title=""><i class="fa fa-sign-in"></i> <span>Logout</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
            <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('');?>admin/home">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('');?>admin/datagejala">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Data Gejala</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('');?>admin/datadepresi">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Data Depresi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('');?>admin/datadiagnosa">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Diagnosa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('');?>admin/datariwayat">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Riwayat</span>
            </a>
          </li>
        </ul>
      </nav>