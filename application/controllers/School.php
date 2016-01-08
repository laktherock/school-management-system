<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class School extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->helper(array('html','form','url'));
			$this->load->library(array('form_validation','session'));

			$this->load->model('Dbconn','',TRUE);  // load Login model class
	 
        

		}

		public function index(){
		
						
		
		 $this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()== TRUE ){




               $email=$_POST['email'];
                $password=$_POST['password'];           
                $result=$this->Dbconn->login($email,$password);
                 if(!empty($result)){
                	$log=array(
                        'id'=>$result['0']->id,
                        'name'=>$result['0']->name,
                        'age'=>$result['0']->age,
                        'gender'=>$result['0']->gender,
                        'dob'=>$result['0']->dob,
                        'email'=>$result['0']->email,
                        'password'=>$result['0']->password,
                        'createddate'=>$result['0']->createddate,
                        'qualification'=>$result['0']->qualification,
                        'group'=>$result['0']->group);
                        
                            $this->session->set_userdata('logged_in', $log);
                            $this->load->view('dashboard',$log);                                   
                    
	                    }else{
	                        $data['error']="Wrong mail id and password";
	                        $this->load->view('login',$data);
	                    }
                
			}
			else{
			//	$this->load->view('header');//session creation
				$this->load->view('login');
			}			
			//$this->load->view('login');*/
		}

		public function register(){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('age','Age','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('conf_password','Confirm Password','required|matches[password]');
			$this->form_validation->set_rules('radio','Gender','required');
			$this->form_validation->set_rules('dob','Date of Birth','required');
			$this->form_validation->set_rules('qualification','Qualification','required');
			$this->form_validation->set_rules('radio1','Role','required');
			if($this->form_validation->run()== FALSE ){
				$this->load->view('register');
			}
			else{
				
				$save= array(
					'name'=> $this->input->post('name'),
					'age'=> $this->input->post('age'),
					'email'=> $this->input->post('email'),
					'password'=> $this->input->post('password'),
					'dob'=> $this->input->post('dob'),
					'gender'=> $this->input->post('radio'),
					'qualification'=> $this->input->post('qualification'),
					'group'=> $this->input->post('radio1')
					);
					//print_r($save);exit;
					$save_id=$this->Dbconn->insert($save);
					redirect('School','refresh');
			}
		
	}
	public function selectclass(){
		$this->load->view('selectclass');
	}
	public function finalview(){
		$this->load->view('finalview');
	}
	public function marks(){
		$this->load->view('marks');
	}
	public function ajax_results(){

		$data['result']=$this->Dbconn->attn($_POST['class']);
		$this->load->view('ajax',$data);
		//print_r($data['result']);exit;

	}

	
			
}


?>
