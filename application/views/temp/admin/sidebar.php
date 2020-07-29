            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>


       

                            <li>
                                <a href="<?= base_url('admin') ?>" class="waves-effect">
                                    <i class="mdi mdi-cube-outline"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>


                        <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span>List Data</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('admin/order') ?>">List Order</a></li>
                                    <li><a href="<?= base_url('admin/pelanggan') ?>">List Pelanggan</a></li>
                                    <li><a href="<?= base_url('admin/teknisi') ?>">List Teknisi</a></li>
                                </ul>
                            </li>




                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span> Report </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Report Order</a></li>
                                    <li><a href="email-read.html">Report Pelanggan</a></li>
                                    <li><a href="email-compose.html">Report Teknisi</a></li>
                                </ul>
                            </li>


                        </ul>



                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->