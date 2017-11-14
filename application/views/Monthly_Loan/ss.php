<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monthly_Loan extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			$result2['r']=$this->User_model->AcNo();
			$res = $data + $result + $result2;
			$this->load->view('Monthly_Loan/Open_Payment_Entry',$res);
		}
		else
		{
			redirect('login', 'refresh');	
			
		}

	}
	public function Open_Payment_Entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			$result2['r']=$this->User_model->AcNo();
			$res = $data + $result + $result2;
			$this->load->view('Monthly_Loan/Open_Payment_Entry',$res);
		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	

	}

	public function Open_Payment_Add()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			$result2['r']=$this->User_model->AcNo();
			$res = $data + $result + $result2;
			$this->form_validation->set_rules('MCDate', 'MCDate', 'required');
			$this->form_validation->set_rules('PName', 'PName', 'required|is_unique[mop_principal.PName]');
			$this->form_validation->set_rules('AcNo', 'AcNo','required|is_unique[mop_principal.AcNo]');
			$this->form_validation->set_rules('AmountM', 'AmountM','required');
			$this->form_validation->set_rules('Docu', 'Docu');
			$this->form_validation->set_rules('Intrest', 'Intrest', 'required');
			$this->form_validation->set_rules('AIntrest', 'AIntrest');
			$this->form_validation->set_rules('DocDetail', 'DocDetail');
			$this->form_validation->set_error_delimiters('<div class="text-danger">',
				'</div>');
			$this->form_validation->set_message('is_unique', 'The %s is already taken');
			if ($this->form_validation->run())
			{
				$datas= array(
					
					'MCDate' => $this->input->post('MCDate'),
					'AcNo' => $this->input->post('AcNo'),
					'PName' => $this->input->post('PName'),
					'Parti' => $this->input->post('Parti'),
					'AmountM' => $this->input->post('AmountM'),
					'Docu' => $this->input->post('Docu'),
					'Intrest' => $this->input->post('Intrest'),
					'AIntrest' => $this->input->post('AIntrest'),
					'DocDetail' => $this->input->post('DocDetail'),

					'payment' => $this->input->post('payment'),
					'IAmount' => $this->input->post('IAmount'),
					'Total' => $this->input->post('Total')
					);

				$this->db->insert('mop_principal',$datas);
				redirect('Monthly_Loan/Open_PrincipalView');
			}

			else
			{
				$this->load->view('Monthly_Loan/Open_Payment_Entry',$res);
				
			}
		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	

	}
	public function Open_PrincipalView()
	{
		if ($this->session->userdata('logged_in')) 
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query'] = $this->User_model->Op_View();
			$res = $result + $data;
			$this->load->view('Monthly_Loan/Open_PrincipalView',$res);
		}
		else
		{
			redirect('login','refresh');
		}
	}

	public function Open_Payment_register()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query'] = $this->User_model->FromtoMOPrincipal();
			$res = $result + $data;
			$this->load->view('Monthly_Loan/Open_Payment_register',$res);

		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	
	}

	

}

/* End of file monthly_Loan.php */
/* Location: ./application/controllers/monthly_Loan.php */