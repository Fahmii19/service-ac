<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/admin/images/favicon.ico') ?>">

        <!-- C3 Chart css -->
        <link href="<?= base_url('assets/admin/libs/c3/c3.min.css') ?>" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>"rel="stylesheet">
        <!-- Icons Css -->
        <link href="<?= base_url('assets/admin/css/icons.min.css') ?>" rel="stylesheet">
        <!-- App Css-->
        <link href="<?= base_url('assets/admin/css/app.min.css') ?>" rel="stylesheet">

        <!-- DataTables -->
        <link href="<?= base_url('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

                <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?= base_url('admin') ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= base_url('assets/admin/images/logo.png') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('assets/admin/images/logo-dark.png') ?>" alt="" height="17">
                                </span>
                            </a>

                            <a href="<?= base_url('admin') ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url('assets/admin/images/logo-light.png') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('assets/admin/images/logo-light.png') ?>" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ml-2">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>

   

                    <div class="d-flex">

     

                
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url('assets/admin/images/users/avatar-1.jpg') ?>" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Setting</a>
                                
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

      

                    </div>
                </div>
            </header>
