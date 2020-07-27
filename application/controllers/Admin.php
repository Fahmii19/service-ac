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


}
