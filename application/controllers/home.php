<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

	function __construct()	{
		parent::__construct();
		//$this->load->model('candidate_model');
	}

	function index(){
		if($this->session->userdata('logged_in'))	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//$data['candidate'] = $this->candidate_model->get_candidates();
			
			$this->load->view('base/header');
			$this->load->view('home_view', $data);
			$this->load->view('base/footer');
		}
		else{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}
}

?>

