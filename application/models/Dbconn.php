<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbconn extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function info($id){
		$this->db->select('*');
		$this->db->from('login');
		if(!empty($id)){
			$this->db->where('id',$id);
		}
	}
	public function insert($save){

		$std_rec= array();
//print_r($save);exit;
		if(!empty($save['name'])){
			$std_rec['name']=$save['name'];
		}
		if(!empty($save['age'])){
			$std_rec['age']=$save['age'];
		}
		if(!empty($save['gender'])){
			$std_rec['gender']=$save['gender'];
		}
		if(!empty($save['dob'])){
			$std_rec['dob']=$save['dob'];
		}
		if(!empty($save['email'])){
			$std_rec['email']=$save['email'];
		}
		if(!empty($save['password'])){
			$std_rec['password']=$save['password'];
		}
		if(!empty($save['qualification'])){
			$std_rec['qualification']=$save['qualification'];
		}
		if(!empty($save['group'])){
			$std_rec['group']=$save['group'];
		}

		$this->db->set('createddate', 'NOW()', FALSE);
		$std_id = $this->db->insert('login',$std_rec);
		return $std_id;

	}

		public function login($email,$password){
		//print_r($email);exit;
		$this->db->select('*');
		$this->db->from('login');	
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$this->db->limit(1);
		$query = $this->db->get();		
		if($query -> num_rows() == 1){
			return $query->result();
		}
		else{
			return false;
		}

	}
	public function attn($class){
		
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('class',$class);
		$query= $this->db->get();
		return $query->result();

		}
	public function insert_attn($attn_arr){
		//print_r($attn_arr);exit;
				foreach($attn_arr as $key=>$value){


				$attn['id']=$key;
				$attn['status']=$value;
				$this->db->set('date', 'NOW()', FALSE);
				$attn_id = $this->db->insert('attendance',$attn);
		
				}
				return $attn_id;


		}		
		
}
?>
