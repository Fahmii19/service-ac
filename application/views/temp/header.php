<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/carousel.css'); ?>" rel="stylesheet">

            <!-- Bootstrap Css -->
        <link href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url('assets/admin/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url('assets/admin/css/app.min.css') ?>"  rel="stylesheet" type="text/css" />


        <link href="<?= base_url('assets/admin/libs/select2/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/admin/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />






  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('homepage')?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('homepage/order')?>">Pesan</a>
            </li>
                <li class="nav-item">
              <a class="nav-link" href="<?= base_url('homepage/cek_pemesanan')?>">Cek Pemesanan</a>
            </li>


          </ul>

        </div>
      </nav>
    </header>