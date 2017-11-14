<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	private $tablename;
	public function __construct()
	{
		parent::__construct();
		$this->tablename='r_admin';
	}
	public function checkUser($username,$password)
	{
		$r = $this->db->get_where($this->tablename,array('username'=>$username,'password'=>$password))->row_array();
		if ($r!=NULL) {
			return $r;
		}else{
			return false;
		}
	}
}

/* End of file auth.php */
/* Location: ./application/models/auth.php */