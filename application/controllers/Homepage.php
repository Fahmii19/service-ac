<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Homepage';
     	$this->load->view('temp/header', $data);
      	$this->load->view('homepage');
      	$this->load->view('temp/footer');
	}

	public function order()
	{
		$data['judul'] = 'Order';
     	$this->load->view('temp/header', $data);
      	$this->load->view('order');
      	$this->load->view('temp/footer');
	}

}
