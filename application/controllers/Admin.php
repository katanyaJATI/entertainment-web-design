<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  }

  public function index()
	{
		$this->load->view('admin/components/header');
		$this->load->view('admin/film/index');
		$this->load->view('admin/components/footer');
	}
  public function add_film()
	{
		$this->load->view('admin/components/header');
		$this->load->view('admin/film/add');
		$this->load->view('admin/components/footer');
	}
}
