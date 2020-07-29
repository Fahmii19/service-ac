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

	public function cek_pemesanan()
	{
		$data['title'] = 'Cek Pemesanan';
     	$this->load->view('temp/header', $data);
      	$this->load->view('cek_pemesanan');
      	$this->load->view('temp/footer');
	}

}
