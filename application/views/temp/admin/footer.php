 <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2017 - 2020 © Admiria.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/admin/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/admin/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/admin/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/admin/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/node-waves/waves.min.js') ?>"></script>

     <!-- Peity chart-->
     <script src="<?= base_url('assets/admin/libs/peity/jquery.peity.min.js') ?>"></script>

    <!--C3 Chart-->
    <script src="<?= base_url('assets/admin/libs/d3/d3.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/c3/c3.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/libs/jquery-knob/jquery.knob.min.js') ?>"></script> 
    <script src="<?= base_url('assets/admin/js/pages/dashboard.init.js') ?>"></script>
    <script src="<?= base_url('assets/admin/js/app.js') ?>"></script>


    <!--ORDER FILE-->
     <!-- Required datatable js -->
        <script src="<?= base_url('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url('assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/jszip/jszip.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/pdfmake/build/vfs_fonts.js')?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url('assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')?>"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url('assets/admin/js/pages/datatables.init.js') ?>"></script> 


    </body>
</html>


       