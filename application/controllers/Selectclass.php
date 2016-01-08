<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Selectclass extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->helper(array('html','form','url'));
			$this->load->library(array('form_validation','session'));
			$this->load->model('Dbconn','',TRUE);  // load Login model class
	 	
        

		}

		public function index(){
			
			$this->load->view('selectclass');	
		}

		public function attendence(){

			$data['values']=$this->Dbconn->attn($this->uri->segment(3));

			//print_r($_POST);

			if(!empty($_POST)){

				foreach($_POST as $ab_key=>$ab_value){
					
					if(!empty($ab_value)){
						if($ab_value=="absent"){
							$ab_array[$ab_key]=$ab_value;
							//print_r($ab_array);
						}
						elseif($ab_value=="present"){
							$ab_array[$ab_key]=$ab_value;
							//print_r($ab_array);
							//echo "HI";
							//exit;
						}						
					}
				}
				if(!empty($ab_array)){
					//$abbs=array($ab_array);

					$id=$this->Dbconn->insert_attn($ab_array);
					//echo "<pre>";				
					//print_r($ab_array);
					//exit;
				}


			}
		
		$this->load->view('attendence',$data);
			//$this->load->view('selectclass');	
		}
	
			
}


?>
