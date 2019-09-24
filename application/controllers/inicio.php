<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inicio extends CI_Controller
{
	fuction_construct()
	{
		parent::_construct();
	}
	public function index()
	{
		$this->load->view('');
	}
}
