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

        <!-- Bootstrap Css -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>"  rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url('assets/admin/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url('assets/admin/css/app.min.css') ?>" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" style="background: url('<?= base_url('assets/admin/images/bg.jpg') ?>');background-size: cover;background-position: center;"></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="<?= base_url('assets/admin/images/admin.jpg') ?>" height="160" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                 
                                    <form class="form-horizontal" action="index.html">
    
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>
    
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
    
                                  
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                           
                            <p class="text-white">2017 - 2020 © Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url('assets/admin/libs/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/metismenu/metisMenu.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/simplebar/simplebar.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/node-waves/waves.min.js') ?>"></script>

        <script src="<?= base_url('assets/admin/js/app.js') ?>"></script>

    </body>
</html>
