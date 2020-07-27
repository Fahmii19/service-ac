<div class="container mr-5 mt-5">
	<div class="col-md-10">



<div class="alert alert-primary" role="alert">
	
	<strong>Perhatikan!</strong> Kolom yang bertanda * wajib diisi
</div>

<form action="" method="POST">


  <div class="card text-white">
  	<div class="card-header bg-info">Data Pelanggan</div>
    <div class="card-body text-dark">
    	
		
		<div class="panel-body">

	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Nama lengkap</label>
		<div class="col-md-10">
			<input type="text" class="form-control" placeholder="Nama Anda">
		</div>
	</div>

	<div class="form-group row">

		<label for="nama" class="col-sm-2 col-form-label">Telepon</label>
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Telepon Anda">
		</div>

		<label for="nama" class="col-sm-1 col-form-label">Email</label>
		<div class="col-md-5">
			<input type="email" class="form-control" placeholder="Email Anda">
		</div>

	</div>

 
	<div class="form-group row">
		<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
		<div class="col-md-10">
			   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</div>
	</div>
    </div>
  </div>





    <div class="card text-white mt-4">
  	<div class="card-header bg-info">Data Pesanan</div>
    <div class="card-body text-dark">
    	
		
		<div class="panel-body">

	<div class="form-group row">
	<label class="col-sm-2 col-form-label">Jenis Layanan</label>
	<div class="col-md-10">
    <select class="form-control" id="exampleFormControlSelect1">
      <option> Pilih Layanan </option>
      <option>Cuci Ac</option>
      <option>Instalasi Ac</option>
      <option>Service Ac</option>
      <option>Isi Freon Ac</option>
    </select>
	</div>
	</div>

	<div class="form-group row">
	<label class="col-sm-2 col-form-label">Service Merek Ac</label>
	<div class="col-md-10">
    <select class="form-control" id="exampleFormControlSelect1">
      <option> Pilih Merek Ac </option>
      <option>AC Panasonic</option>
      <option>AC Samsung</option>
    </select>
	</div>
	</div>

	<div class="form-group row">
	<label class="col-sm-2 col-form-label">Total Unit Ac</label>
	<div class="col-md-10">
    <select class="form-control" id="exampleFormControlSelect1">
      <option> 0 </option>
      <option>1</option>
      <option>2</option>
    </select>
	</div>
	</div>


	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Keluhan</label>
				<div class="col-md-10">
			   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</div>



	<div class="form-group row">
  <label class="col-sm-2 col-form-label">Tanggal Pengerjaan</label>
  <div class="col-md-10">
    <input class="form-control" type="date" value="<?= date('Y-m-d') ?>" id="example-date-input">
  </div>
</div>


<div class="form-group row">
  <label class="col-sm-2 col-form-label">Jam Pengerjaan</label>
  <div class="col-md-10">
  	<?php date_default_timezone_set('Asia/Jakarta'); ?>
    <input class="form-control" type="time" value="<?= date('H:i:s') ?>" id="example-time-input">
  </div>
</div>



	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Kode</label>
		<div class="col-md-8">
			<input type="text" class="form-control" placeholder="Nama Anda">
			<em>*Perhatikan!, ingat kode berikut untuk pelayanan service kedepannya.</em>
		</div>
		<div class="col-md-2">
			
	<button class="btn btn-primary" type="submit">Buat kode</button>
		</div>
	</div>




	<button class="btn btn-primary" type="submit">Simpan</button>


	</div>

    </div>
  </div>






</form>








</div>
</div>





