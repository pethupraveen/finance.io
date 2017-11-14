<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Party_Master extends CI_Controller {

	public function Party_Master_Entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

		$this->form_validation->set_rules('PName', 'PName', 'required|is_unique[parmaster.PName]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">',
			'</div>');
		$this->form_validation->set_message('is_unique', 'The PartyName is already taken');
		if ($this->form_validation->run()) {
		$data2 = array(
				'PName' => $this->input->post('PName'),
				'Phone' => $this->input->post('Phone'),
				'Mobile' => $this->input->post('Mobile'),
				'Address' => $this->input->post('Address'),
				'Address2' => $this->input->post('Address2'),
				'Area' => $this->input->post('Area'),
				'City' => $this->input->post('City'),
				'Zipcode' => $this->input->post('Zipcode')
				);
		$this->db->insert('parmaster', $data2);
		return redirect('Party_Master/Party_Master_View');
		}
		else
		  {
		  	
		 	$this->load->view('Party_Master/Party_Master', $data);
		  }
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}


	Public function get_countries()
	{
		$query=$this->db->get('country');
        $result= $query->result();
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->countryid;
			$data['label']=$r->country;
			$json[]=$data;
			
			
		}
		echo json_encode($json);
	
	}

	Public function get_states()
	{

		  $result=$this->db->where('countryid',$_POST['id'])
						->get('state')
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->id;
			$data['label']=$r->statename;
			$json[]=$data;
			
			
		}
		echo json_encode($json);

	}


	public function Party_Master_Edit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$query = $this->db->select('*')->from('parmaster')->where('pcode', $id);
			//$this->db->join('country', 'parmaster.City = country.countryid','left');
			//$this->db->join('state', 'parmaster.Area = state.id','left');
			$query = $this->db->get();
			$data['row'] = $query->row_array();
			$this->load->view('Party_Master/Party_Master_Edit',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}

	public function Update_data($id)
	{
		
		$data= array(
					'PName' => $this->input->post('PName'),
					'Phone' => $this->input->post('Phone'),
					'Mobile' => $this->input->post('Mobile'),
					'Address' => $this->input->post('Address'),
					'Address2' => $this->input->post('Address2'),
					'City' => $this->input->post('City'),
					'Area' => $this->input->post('Area'),
					'Zipcode' => $this->input->post('Zipcode')
					);
		$this->db->update('parmaster', $data, array('pcode' => $id));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Party_Master/Party_Master_View");
	
	
	}
	public function Party_MasterDelete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('parmaster');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Party_Master/Party_Master_View");

	}
	
	public function Party_Master_View()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->db->select('*');    
			$this->db->from('parmaster');
			$this->db->join('country', 'parmaster.City = country.countryid','left outer');
			$this->db->join('state', 'parmaster.Area = state.id', 'left outer');
			$query = $this->db->get();
			//$data['result']= $query->result_array();
			$data['query']= $query->result_array();
		    
			$this->load->view('Party_Master/Party_Master_View',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
	}
	public function Region_Master()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$data['result'] = $this->User_model->Region_Master();
			$this->load->view('Party_Master/Region_Master', $data, FALSE);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function Region_Master_Entry()
	{
		$this->form_validation->set_rules('statename', 'statename', 'required');
		
		if ($this->form_validation->run()) {
		$data2 = array(
			'statename' => $this->input->post('statename'),
			'countryid' => $this->input->post('countryid')
			);
		$this->db->insert('state', $data2);
		return redirect('Party_Master/Region_Master_View');
		}
		else{
			return redirect('Party_Master/Region_Master');
		}

	}
	public function Region_Master_View()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$data['result'] = $this->User_model->Region_Master();
			$this->load->view('Party_Master/Region_Master_View', $data, FALSE);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function City_Master()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$query = $this->db->get('country');
			$data['result']= $query->result_array();
			$this->load->view('Party_Master/City_Master', $data, FALSE);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function City_Master_Entry()
	{
		$this->form_validation->set_rules('country', 'country', 'required');
		
		if ($this->form_validation->run()) {
		$data2 = array(
			'country' => $this->input->post('country')
			);
		$this->db->insert('country', $data2);
		return redirect('Party_Master/City_Master');
		}
		else{
			return redirect('Party_Master/City_Master');
		}

	}
	
	public function City_Master_Edit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$query = $this->db->get_Where('country', array('countryid'=>$id));
			$data['row']= $query->row_array();
			$data['result']= $query->result_array();
			$this->load->view('Party_Master/City_Master_Edit', $data, FALSE);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function City_Master_Update($id)
	{
		$data = array(
			'country' => $this->input->post('country')
			);
		$this->db->update('country', $data,array('countryid' => $id));
		redirect('Party_Master\City_Master','refresh');
	}
	
}

/* End of file Party_Master.php */
/* Location: ./application/controllers/Party_Master.php */