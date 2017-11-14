<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subGroup extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('head', $data);
			$this->load->model('User_model');
			$result['query'] = $this->User_model->getgName();
			$this->load->view('subGroups',$result);

		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}
	public function head()
	{
		$this->load->view('inc/header');
	}
	public function subGroups_entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('head', $data);
			$this->load->model('User_model');
			$result['query'] = $this->User_model->getgName();
			
		$this->form_validation->set_rules('subName', 'subName', 'required');
		$this->form_validation->set_rules('gName', 'gName', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">',
			'</div>');
		if ($this->form_validation->run())
		{
			$data= array(
						'subName' => $this->input->post('subName'),
						'gName' => $this->input->post('gName')
						);
		//means insert a data into the table
		 $this->db->insert('subgroup',$data);
		 $this->session->set_flashdata('message', 'Your data inserted Successfully..');
				return redirect('subGroup');
		}
		else{
			$this->load->view('subGroups',$result);
			
		}
	
	}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}

}

/* End of file subGroup.php */
/* Location: ./application/controllers/subGroup.php */