<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Samp extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
public function insert($save){
print_r($save);exit;
}
}
