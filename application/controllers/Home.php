<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		//$this->load->database('default');
		//$this->load->model('home_db');
       // $this->load->model('dashboard_db');
    }
	
	/**
	* Despliega la vista principal
	**/
	public function index()
	{
		//$data['slider'] = $this->home_db->getSlider();
		//$data['camp'] = $this->home_db->getCamp();
		$this->load->view('wvHome');
	}
	
}
