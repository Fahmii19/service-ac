<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Homepage';
     	$this->load->view('temp/header', $data);
      	$this->load->view('homepage');
      	$this->load->view('temp/footer');
	}

	public function order()
	{
		$data['title'] = 'Order';
     	$this->load->view('temp/header', $data);
      	$this->load->view('order');
      	$this->load->view('temp/footer');
	}
	

	// public function tambah_order()
	// {
	// 	$pelanggan = array(
	// 		'kode' = $kode,
	// 		'nama' = $nama,
	// 		'email' = $email,
	// 		'telepon' = $telepon,
	// 		'alamat' = $alamat
	// 	);

	// 	$order = array (
	// 		'jenis_layanan' = $jenis_layanan,
	// 		'keluhan' = $keluhan,
	// 		'tgl_pengerjaan' = $tgl_pengerjaan,
	// 		'waktu_pengerjaan' = $waktu_pengerjaan,
	// 		'jumlah' = $jumlah,
	// 		'merek_ac' = $merek

	// 	);

	// }

	public function cek_pemesanan()
	{
		$data['title'] = 'Cek Pemesanan';
     	$this->load->view('temp/header', $data);
      	$this->load->view('cek_pemesanan');
      	$this->load->view('temp/footer');
	}

}
