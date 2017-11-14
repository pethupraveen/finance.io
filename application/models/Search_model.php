<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }
    function searchbyname(){
        $query = $this->db->SELECT('*')->FROM('links')->JOIN('links2','links.id = links2.link1_id','left');
         $query = $this->db->get();
        return $query->result_array();
    }
    function searchbyname2(){
        $name = $this->input->post('name');
        $query = $this->db->SELECT('*')->FROM('links')->JOIN('links2','links.id = links2.link1_id','left')->like('link1',$name);
         $query = $this->db->get();
        return $query->result();
    }
}

/* End of file search_model.php */
/* Location: ./application/models/search_model.php */