<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class country_model extends CI_Model {

	public function __construct() {
		$this -> load -> database();
		
	}
	
	function get_countries() {
		$this -> db -> select('id, country_name');
		$query = $this -> db -> get('countries');
		
		$countries = array();
		
		if ($query -> result()) {
			foreach ($query->result() as $country) {
				$countries[$country->id] = $country->country_name;
			}
			return $countries;
		} else {
			return FALSE;
		}
	}

}

/* End of file country_model.php */
/* Location: ./application/models/country_model.php */