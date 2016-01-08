<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mark_contro extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form','html','url'));
		$this->load->model('Dbconn','',TRUE);
	}
	function index(){
		$this->load->view('dashboard');
		/*$this->form_validation->set_rules('class','select class','required');
		$this->form_validation->set_rules('Studentname','Studentname','required');
		$this->form_validation->set_rules('maths','maths','required');
		$this->form_validation->set_rules('english','english','required');
		$this->form_validation->set_rules('computer','computer','required');
		$this->form_validation->set_rules('total','total','required');
		$this->form_validation->set_rules('result','result','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('marks');
		}
		else{
			$mark_val=array(
				'name'=>$this->input->post('Studentname'),
				'maths'=>$this->input->post('maths'),
				'english'=>$this->input->post('english'),
				'computer'=>$this->input->post('computer'),
				'total'=>$this->input->post('total'),
				'result'=>$this->input->post('result')
				);
			//print_r($mark_val);exit;
			$mark_id=$this->Dbconn->insert('mark_val');
			redirect('mark','refresh');

		}*/
	}
}