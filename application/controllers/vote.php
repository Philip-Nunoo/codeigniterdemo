<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Vote extends CI_Controller {

	function __construct()	{
		parent::__construct();
		$this->load->model('candidate_model');
		$this->load->model('position_model');
	}

	function index(){
		if($this->session->userdata('logged_in'))	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['candidates'] = $this->candidate_model->get_all_candidates();
			$data['positions'] = $this->position_model->get_all_positions();
			
			$this->load->view('base/header');
			$this->load->view('crak_view', $data);
			$this->load->view('base/footer');
		}
		else{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	
	function secretary(){
		if($this->session->userdata('logged_in'))	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['candidates'] = $this->candidate_model->get_secretary_candidates();
			
			$this->load->view('base/header');
			$this->load->view('2_view', $data);
			$this->load->view('base/footer');
		}
		else	{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	
	function treasurer(){
		if($this->session->userdata('logged_in'))	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['candidates'] = $this->candidate_model->get_treasurer_candidates();
			
			$this->load->view('base/header');
			$this->load->view('crak_view', $data);
			$this->load->view('base/footer');
		}
		else	{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	
	function organizer(){
		if($this->session->userdata('logged_in'))	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['candidates'] = $this->candidate_model->get_organizer_candidates();
			
			$this->load->view('base/header');
			$this->load->view('crak_view', $data);
			$this->load->view('base/footer');
		}
		else	{
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

