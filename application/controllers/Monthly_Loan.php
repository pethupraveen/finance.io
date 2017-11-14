<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monthly_Loan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('User_model');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	
			
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$data['query']=$this->User_model->viewPartyMaster();
		
		$this->load->view('Monthly_Loan/Open_Payment_Entry',$data);

		
	}
		public function get_AcNo()
		{
			$query = $this->db->query('SELECT MAX(AcNo) AS `AcNo` FROM `mop_principal` ORDER BY AcNo DESC LIMIT 1')->row_array();
			
			//print_r($query);
			if($query['AcNo'] == "")
		    {
		        $message = 1;
		    }
		    else
		    {
		        $message = $query['AcNo']+1;
		    }
		   
	  		echo json_encode ($message); 
		}
		public function live()
		{
			$this->load->view('Monthly_Loan\live');
		}
	public function Open_Payment_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query']=$this->User_model->viewPartyMaster();
		
		$this->load->view('Monthly_Loan/Open_Payment_Entry',$data);
	}

	public function Payment_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query']=$this->User_model->viewPartyMaster();
		$data['AcNo']=$this->User_model->FindMPAcNo();
		$this->load->view('Monthly_Loan/Payment_Entry',$data);
	}
	
	public function add()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query']=$this->User_model->viewPartyMaster();
		$data['AcNo']=$this->User_model->FindMPAcNo();
		$this->form_validation->set_rules('PName', 'PName', 'required|is_unique[mop_principal.PName]');
		$this->form_validation->set_message('is_unique', 'The %s is already taken');
		if ($this->form_validation->run())
		{
			$op = $this->input->post('op');
			$p = $this->input->post('p');
			if (isset($op)) {
				$data=array(
					'MCDate' => $this->input->post('MCDate'),
					'op' => $this->input->post('op'),
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
				$this->db->insert('mop_principal',$data);

				redirect('Monthly_Loan\Open_Payment_View','refresh');
			}
			if (isset($p)) {
				$data=array(
					'MCDate' => $this->input->post('MCDate'),
					'p' => $this->input->post('p'),
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
				$this->db->insert('mop_principal',$data);

				redirect('Monthly_Loan\Payment_View','refresh');
			}
		}
		else
		{
			$this->load->view('Monthly_Loan\Open_Payment_Entry',$data);
		}
	}
	public function Open_Payment_View()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$query=  $this->db->get_Where('mop_principal', array('op'=>11));
		$data['query'] = $query;
		$this->load->view('Monthly_Loan/Open_Payment_View',$data);
		
	}
	public function Open_Payment_Print()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		 $AcNo = $this->input->post('AcNo');
		if (isset($AcNo)) {
			
			$this->db->select('*');    
			$this->db->from('parmaster');
			$this->db->Where('AcNo', $AcNo);
			$this->db->Where('op', 11);
			$this->db->join('country', 'parmaster.City = country.countryid','left outer');
			$this->db->join('state', 'parmaster.Area = state.id', 'left outer');
			$this->db->join('mop_principal', 'mop_principal.PName = parmaster.PName', 'left outer');
			$query = $this->db->get();    
			$data['result'] =  $query->row_array();  
			$data['row'] = $query->result_array();
			$this->load->view('Monthly_Loan/Open_Payment_Print', $data);
		} else {
			 $startdate = $this->input->post('SDate');
			 $enddate = $this->input->post('EDate');
			 $this->db->select("*");
			 $this->db->from('parmaster');
			 $this->db->join('country', 'parmaster.City = country.countryid','left outer');
			 $this->db->join('state', 'parmaster.Area = state.id', 'left outer');
			 $this->db->join('mop_principal', 'mop_principal.PName = parmaster.PName', 'left outer');
			 //$this->db->from('principal');
			 
			 $this->db->where('MCDate >=', date('m/d/Y', strtotime($startdate)));
			 $this->db->where('MCDate <=', date('m/d/Y', strtotime($enddate)));
			 $this->db->where('op', 11);
			
			 $query = $this->db->get();
			 $data['result'] =  $query->row_array();  
			 $data['row']= $query->result_array();
			 $this->load->view('Monthly_Loan/Open_Payment_Print', $data);
		}
	
	}
	
	public function Payment_View()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query'] = $this->User_model->P_View();
		$this->load->view('Monthly_Loan/Payment_View',$data);
		
	}
	public function Payment_Print($AcNo)
	{
		$this->load->model('User_model');
		$data['result'] = $this->User_model->Payment_Print($AcNo);
		$this->load->view('Monthly_Loan\Open_Payment_Print2', $data, FALSE);
	}
	public function Pop_Edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query']= $this->User_model->new_try2();
		$data['query2']= $this->User_model->new_try();
		$this->load->view('Monthly_Loan/Open_Payment_Edit',$data);
		

	}
	public function Open_Payment_Edit($id)
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query']= $this->User_model->new_try2();
		$data['query2'] = $this->User_model->Op_AcNo($id);
		$this->load->view('Monthly_Loan/Open_Payment_Edit',$data);

	}
	public function Update_Op($id)
	{
		$data=array(
			'MCDate' => $this->input->post('MCDate'),
			'PName' => $this->input->post('PName'),
			'Parti' => $this->input->post('Parti'),
			'AmountM' => $this->input->post('AmountM'),
			'Docu' => $this->input->post('Docu'),
			'Intrest' => $this->input->post('Intrest'),
			'AIntrest' => $this->input->post('AIntrest'),
			'DocDetail' => $this->input->post('DocDetail'),
			'payment' => $this->input->post('payment'),
			'IAmount' => $this->input->post('IAmount'),
			'Total' => $this->input->post('Total'),
			'AcNo' => $this->input->post('AcNo')
			);
		$this->db->update('mop_principal', $data, array('id' => $id));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Monthly_Loan/Open_Payment_View");
	}
	public function Update_p($id)
	{
		$data=array(
			'MCDate' => $this->input->post('MCDate'),
			'PName' => $this->input->post('PName'),
			'Parti' => $this->input->post('Parti'),
			'AmountM' => $this->input->post('AmountM'),
			'Docu' => $this->input->post('Docu'),
			'Intrest' => $this->input->post('Intrest'),
			'AIntrest' => $this->input->post('AIntrest'),
			'DocDetail' => $this->input->post('DocDetail'),
			'payment' => $this->input->post('payment'),
			'IAmount' => $this->input->post('IAmount'),
			'Total' => $this->input->post('Total'),
			'AcNo' => $this->input->post('AcNo')
			);
		$this->db->update('m_payment', $data, array('id' => $id));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Monthly_Loan/Payment_View");
	}
	public function Payment_Edit($id)
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			$data2 = $this->User_model->Op_AcNo2($id);
			$res = $data + $result+$data2;
			$this->load->view('Monthly_Loan/Payment_Edit',$res);
			
		
	}
	public function Open_Payment_Delete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('mop_principal');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Monthly_Loan/Open_Payment_View");
	}

	public function Payment_Delete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('mop_principal');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Monthly_Loan/Payment_View");
	}


	public function Open_Payment_Register()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->load->view('Monthly_Loan/Open_Payment_register',$data);

	
	}

	public function Payment_register()
	{
	
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query'] = $this->User_model->FromtoMPrincipal();
		$this->load->view('Monthly_Loan/Payment_register',$data);

		
	}

	public function Open_Receipt_Entry()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		if($this->input->post('sbm') == "Op_Add") 
		{
			$data =  array(
				'Rcode' => $this->input->post('Rcode'),
				'RDate' => $this->input->post('RDate'),
				'RAmount' => $this->input->post('RAmount'),
				'BAmount' => $this->input->post('BAmount'),
				'IRAmount' => $this->input->post('IRAmount'),
				'IBAmount' => $this->input->post('IBAmount')
				);
			$this->db->insert('mop_receipt', $data);
			
			redirect('Monthly_Loan\Open_Receipt_Entry');

		}
		$data['query'] = $this->User_model->MOR_Search();
		$this->load->view('Monthly_Loan/Open_Receipt_Entry',$data);

		
	}

	public function Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query'] = $this->User_model->MR_Search();
		$this->load->view('Monthly_Loan/Receipt_Entry',$data);
		
		
	}
	
	public function Open_Receipt_register()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

			$startdate = $this->input->post('SDate');
		  	$enddate = $this->input->post('EDate');
		  	$PName = $this->input->post('PName');
		  	
		$this->db->select('PName');    
		$this->db->from('mop_principal');
		$query = $this->db->get();    
		$data['PName']=$query->result_array();
		$data['query'] = $this->User_model->FromtoMOReceipt();
		$this->load->view('Monthly_Loan/Open_Receipt_register',$data);

	
	}
	public function Receipt_register()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query'] = $this->User_model->FromtoMReceipt();
		$this->load->view('Monthly_Loan/Receipt_register',$data);


	}
	public function Pass_Book()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['result']= $this->User_model->getPass_BookPName_mop();
		$this->load->view('Monthly_Loan/Pass_Book', $data);

	}
	public function Pass_Book_Find()
	{
	   
		$AcNo = $this->input->post('AcNo');
		$PName2 = $this->input->post('PName');
		

		if (isset($_POST['PName'])) {
			  $query = $this->db->select('*')->from('mop_principal')->where('AcNo',$PName2)->order_by("R_id")
     			->join('mop_receipt','mop_principal.AcNo = mop_receipt.Rcode','left');
     			 $query = $this->db->get();
			$data['result'] = $query->row_array();
			$data['results'] = $query->result_array();
			$this->load->view('Monthly_Loan/Pass_Book_Print', $data);
			//$query = $this->db->get_Where('mop_principal', array('AcNo'=>$AcNo));
		}
		else if (isset($_POST['AcNo'])) {
			 $query2 = $this->db->select('*')->from('mop_principal')->where('AcNo',$AcNo)->order_by("R_id")
     			->join('mop_receipt','mop_principal.AcNo = mop_receipt.Rcode','left outer');
     			 $query2 = $this->db->get();
			$data['result'] = $query2->row_array();
			$data['results'] = $query2->result_array();
			$this->load->view('Monthly_Loan/Pass_Book_Print', $data);
		} else {
			echo "Error";
		}

	}
	public function PassBook_Print($AcNo)
	{
		$this->load->model('User_model');
		$data['result'] = $this->User_model->get_passbook_mop($AcNo);
		$data['results'] = $this->User_model->get_passbook2_mop($AcNo);
		$this->load->view('Monthly_Loan/PassBook_Print', $data);
	}
	public function Outstanding_List()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->model('User_model');
		$data['query'] = $this->User_model->Arrear_List();
		$this->load->view('Monthly_Loan\Outstanding_List', $data, FALSE);
		
	}

}

/* End of file monthly_Loan.php */
/* Location: ./application/controllers/monthly_Loan.php */