<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			
			$data['query'] = $this->User_model->getsubName();
			$this->load->view('Master/Master_Entry',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function Master_Entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['query'] = $this->User_model->getsubName();
		
			$this->form_validation->set_rules('accName', 'accName', 'required|is_unique[accmaster.accName]');
			$this->form_validation->set_rules('SubGroupCode', 'SubGroupCode', 'required');
			$this->form_validation->set_message('is_unique', 'The Account Name is already taken');
			if ($this->form_validation->run())
			{
				$data= array(
					'accName' => $this->input->post('accName'),
					'subName' => $this->input->post('SubGroupCode')
					
					);
			//means insert a data into the table
				$this->db->insert('accmaster',$data);

				return redirect('Master/Master_View');
			}
			else
			{
				$this->load->view('Master/Master_Entry', $data);
			}
		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function Master_Edit($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['r'] = $this->User_model->getoneCode($id);
			$data['query'] = $this->User_model->getsubName();
			$this->load->view('Master/Master_Edit',$data);
		}
		else
		{
		    //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function Update_data($Code)
	{
		$data = array(
			'accName' => $this->input->post('Name'),
			'subName' => $this->input->post('SubGroupCode')
					
		);
		$this->db->update('accmaster', $data, array('Code' => $Code));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Master/Master_View");
	}
	public function Master_Delete($Code)
	{
		$id = $this->db->where('id',$Code);
		$this->db->delete('accmaster');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Master/Master_View");

	}
	
	public function Master_View()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['query']=$this->User_model->viewMaster();
			$this->load->view('Master/Master_View',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
		
	}
	
	public function subGroup()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$data['query'] = $this->User_model->getgName();
			$this->load->view('Master\subGroup',$data);
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
			$this->load->view('Master/Region_Master', $data);
		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}

	public function Groups()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Master/Groups', $data);
		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}
	public function GEntry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->form_validation->set_rules('gName', 'gName', 'required');
			$this->form_validation->set_rules('gType', 'gType', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">',
				'</div>');
			if ($this->form_validation->run())
			{
				$data= array(
					'gName' => $this->input->post('gName'),
					'gType' => $this->input->post('gType')
					);
			//means insert a data into the table
				$this->db->insert('groups',$data);

				return redirect('Master/Groups');
			}
			else
			{
				$this->load->view('Master/Groups', $data);
			}
		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}
	public function Opening_Balance()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$data['query']=$this->User_model->viewMaster();
			$this->load->view('Master/Opening_Balance',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}public function Opening_Balance1()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Master/Opening_Balance1',$data);
		}
		else
		{
			redirect('login', 'refresh');
		}

	}
	public function data_table()
	{
		$query=$this->db->get('dataTable');
        $result= $query->result();
        $data=array();
		foreach($result as $r)
		{
			$r->first_name;
			
			$r->last_name;
			
			$r->position;
			
			$r->office;
			
			$r->extn;
			
			$r->start_date;
			
			$r->salary;
			
			$json[]=$r;
			
			
		}
		echo json_code($json);
	}
	public function openBalanEdit($Code)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$row = $this->User_model->getBalance($Code);
			$data['r'] = $row;
			$this->load->view('Master/openBalance/openBalanEdit',$data);
		}
		else
		{
				  //If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function update_balance($Code)
	{
		$data = array(
			'Name' => $this->input->post('Name'),
			'OpBal' => $this->input->post('OpBal'),
			'OpBalDC' => $this->input->post('OpBalDC')
			);
		$this->db->update('master', $data, array('Code' => $Code));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Master/openingBalance");
	}
	public function openBalanDelete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('accmaster');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Master/openingBalance");
	}
	public function Acc_Setting()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Master/Acc_Setting', $data);
			
			$result['query']=$this->User_model->getaccName();
			$this->form_validation->set_rules('DPL', 'DPL', 'required');
			$this->form_validation->set_rules('MPL', 'MPL', 'required');
			$this->form_validation->set_rules('WPL', 'WPL', 'required');
			$this->form_validation->set_rules('HPPL', 'HPPL', 'required');
			$this->form_validation->set_rules('TipupL', 'TipupL', 'required');
			$this->form_validation->set_rules('IDPL', 'IDPL', 'required');
			$this->form_validation->set_rules('IMPL', 'IMPL', 'required');
			$this->form_validation->set_rules('IWPL', 'IWPL', 'required');
			$this->form_validation->set_rules('IHPPL', 'IHPPL', 'required');
			$this->form_validation->set_rules('ITipupL', 'ITipupL', 'required');
			$this->form_validation->set_rules('ML', 'ML', 'required');
			$this->form_validation->set_rules('IML', 'IML', 'required');
			$this->form_validation->set_rules('DAC', 'DAC', 'required');
			$this->form_validation->set_rules('IDAC', 'IDAC', 'required');
			$this->form_validation->set_rules('DC', 'DC', 'required');
			$this->form_validation->set_rules('IDE', 'IDE', 'required');
			$this->form_validation->set_rules('AP', 'AP', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			if ($this->form_validation->run())
			{
				$data= array(
					'DPL' => $this->input->post('DPL'),
					'MPL' => $this->input->post('MPL'),
					'WPL' => $this->input->post('WPL'),
					'HPPL' => $this->input->post('HPPL'),
					'TipupL' => $this->input->post('TipupL'),
					'IDPL' => $this->input->post('IDPL'),
					'IMPL' => $this->input->post('IMPL'),
					'IWPL' => $this->input->post('IWPL'),
					'IHPPL' => $this->input->post('IHPPL'),
					'ITipupL' => $this->input->post('ITipupL'),
					'ML' => $this->input->post('ML'),
					'IML' => $this->input->post('IML'),
					'DAC' => $this->input->post('DAC'),
					'IDAC' => $this->input->post('IDAC'),
					'DC' => $this->input->post('DC'),
					'IDE' => $this->input->post('IDE'),
					'AP' => $this->input->post('AP')
					);
			//means insert a data into the table
				$this->db->insert('accSetting',$data);

				return redirect('Master/Acc_Setting');
			}
			
		}
		else
		{
		  //If no session, redirect to login page
			redirect('login', 'refresh');
		}

	}
	

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */
