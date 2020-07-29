<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
     	$this->load->view('temp/admin/header', $data);
     	$this->load->view('temp/admin/sidebar');
      	$this->load->view('admin/dashboard');
      	$this->load->view('temp/admin/footer');
	}


	public function order()
	{
		$data['title'] = 'Order';
     	$this->load->view('temp/admin/header', $data);
     	$this->load->view('temp/admin/sidebar');
      	$this->load->view('admin/order');
      	$this->load->view('temp/admin/footer');
	}


	public function teknisi()
	{
		$data['title'] = 'Teknisi';
     	$this->load->view('temp/admin/header', $data);
     	$this->load->view('temp/admin/sidebar');
      	$this->load->view('admin/teknisi');
      	$this->load->view('temp/admin/footer');
	}


	public function pelanggan()
	{
		$data['title'] = 'Pelanggan';
     	$this->load->view('temp/admin/header', $data);
     	$this->load->view('temp/admin/sidebar');
      	$this->load->view('admin/pelanggan');
      	$this->load->view('temp/admin/footer');
	}


}
