<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class city_model extends CI_Model {

	public function __construct() {
		$this -> load -> database();
		
	}
	
	function get_cities($country = null){
		$this->db->select('id, city_name');
		
		if($country != NULL){
			$this->db->where('country_id', $country);
		}
		
		$query = $this->db->get('cities');
		
		$cities = array();
		
		if($query->result()){
			foreach ($query->result() as $city) {
				$cities[$city->id] = $city->city_name;
			}
			return $cities;
		}else{
			return FALSE;
		}
	}

}

/* End of file city_model.php */
/* Location: ./application/models/city_model.php */