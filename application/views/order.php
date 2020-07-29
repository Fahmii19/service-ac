          
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mt-4">
                                    <div class="card-body">

                                        <h4 class="card-title">Form Pemesanan Service AC</h4>
                                        <p class="card-title-desc"><strong style="color: red">Perhatikan!</strong> Kolom yang bertanda * wajib diisi</p>

                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="" method="post" >

                                            <h3>Data Pelanggan</h3>
                                            <fieldset>
                                              

                                            	 <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Nama Lengkap*</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtFirstNameBilling" name="nama" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Telepon*</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="telepon" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Email*</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyBilling" 
                                                                name="email" type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                             <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Alamat Lengkap*</label>
                                                            <div class="col-lg-9">
                                                                <textarea id="txtAddress1Billing" name="alamat" rows="4" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                             
                                                <div class="row">
                                             <!--        <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Telepon*</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                  <!--           <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Live Market A/C</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                     <div class="row">
                                     <!--                <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Alamat Lengkap*</label>
                                                            <div class="col-lg-9">
                                                                <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                            <!--                 <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Warehouse Address</label>
                                                            <div class="col-lg-9">
                                                                <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            		   


                                            </fieldset>

                                            <h3>Data Pesanan</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Jenis Layanan</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="jenis_layanan" class="form-control">
                                                                    <option value="">--Pilih Layanan--</option>
                                                                    <option value="">Instalasi Ac</option>
                                                                    <option value="">Isi Freon</option>
                                                                    <option value="">Cuci Ac</option>
                                                                    <option value="">Service Ac</option>
                                                                </select>
                                                                   <small class="form-text text-muted">pilih dengan keperluan pada ac</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Tanggal</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input" name="tgl_pengerjaan" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                                   <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Merek</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="merek" class="form-control">
                                                                    <option value="">--Pilih Merek--</option>
                                                                    <option value="">Panasonic</option>
                                                                    <option value="">Samsung</option>
                                                                </select>
                                                                
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Waktu</label>
                                                            <div class="col-lg-9">
                                                            	<?php date_default_timezone_set('Asia/Jakarta'); ?>
                                                               <input class="form-control" type="time" value="<?= date('H:i') ?>" id="example-time-input" name="waktu_pengerjaan" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                               <div class="col-md-6">
                                                                   <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Total</label>
                                                            <div class="col-lg-9">
                                                                 <div class="form-group row">
                                                
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="telepon" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                                 <small class="form-text text-muted">unit ac yang kamu ingin service</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">Kode</label>
                                                            <div class="col-lg-7">
                                                                <input id="txtStateProvinceShipping" name="kode" type="text" class="form-control">
                                                                           <small class="form-text text-muted">Mohon, untuk diingat kode berikut untuk pelayanan service kedepannya.</small>
                                                            </div>
                                                            <div class="col-lg-2">
                                                            	<button class="btn btn-success waves-effect waves-light" type="submit">Buat Kode</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label  class="col-lg-3 col-form-label">Keluhan</label>
                                                            <div class="col-lg-9">
                                                                <textarea id="txtAddress1Billing" name="keluhan" rows="4" class="form-control"></textarea>

                                                                           <small class="form-text text-muted">masukan permasalahan pada ac, agar teknisi cepat memperbaiki ac kamu</small>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                            <!--                 <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Warehouse Address</label>
                                                            <div class="col-lg-9">
                                                                <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </fieldset>


                                            <h3>Pembayaran</h3>
                                            <fieldset>


                                               <div class="row">
                                                   

                                                            <label>Metode Pembayaran</label>

                                                            <div class="col-md-2">
                                                            <button type="button" class="btn btn-success waves-effect waves-light" onclick="Offline()">OFFLINE</button>

                                                            </div>

                                                               <label>Metode Pembayaran</label>
                                                            <div class="col-md-2">
                                                               <button type="button" class="btn btn-success waves-effect waves-light" onclick="Online()">ONLINE</button>

                                                            </div>



                                                       <div class="col-md-12">
					                                       <div id="offline" style="display: none;">
															<div class="">
					                                            <div class="alert alert-success mt-3 mb-3" role="alert">
					                                                <h4 class="alert-heading font-size-18">Metode Offline</h4>
					                                                <p>Dengan cara ini kamu melakukan pembayaran melalui teknisi telah selesai memperbaiki ac kamu.</p>
					                                                <p class="mb-0">Harap, catat tagihan kamu.</p>
					                                            </div>
					                                        </div>
															</div>


															  <div id="online" style="display: none;">
																<div class="card mt-2">
																	<div class="card-body">
																		<h4 class="card-title">Metode Online</h4>
																		<p class="card-title-desc">Melalui online kamu cukup mengkirim bukti pembayaran saja.</p>

																		<div class="alert alert-success" role="alert">
                                                <strong>Kirim Pembayaran!</strong> lakukan transfer ke bank <a href="#" class="alert-link">Mandiri A/N Budi No.Rek 47264724</a>.
                                            </div>

																		<div class="form-group ">
			                                                <label>Kirim Bukti Pembayaran</label>
			                                                <input type="file" class="filestyle" data-input="false" data-buttonname="btn-secondary">
			                                            </div>
																	</div>
																</div>
																</div>



                                                           </div>
                                                </div>



                                            </fieldset>
                                            <h3>Konfirmasi</h3>
                                            <fieldset>
                                                <div class="p-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions.</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div> <!-- container-fluid -->
          