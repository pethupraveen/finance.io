<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
		$data['AcNo']=$this->User_model->FindAcNo2();
		$this->load->view('Principal/Open_Payment_Entry',$data);
	}
	public function get_AcNo()
	{
		$query = $this->db->query('SELECT MAX(AcNo) AS `AcNo` FROM `op_principal` ORDER BY AcNo DESC LIMIT 1')->row_array();
		
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

	public function Open_Payment_Entry()
	{

		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$op = $this->input->post('op');
		$p = $this->input->post('p');
		if (isset($op)) {

			$this->form_validation->set_rules('PName', 'PName', 'required|is_unique[op_principal.PName]');
			$this->form_validation->set_message('is_unique', 'The Account Name is already taken');
			
			if ($this->form_validation->run())
			{
			$datas= array(
			'op' => $this->input->post('op'),
			'LDate' => $this->input->post('LDate'),
			'AcNo' => $this->input->post('AcNo'),
			'PName' => $this->input->post('PName'),
			'Terms' => $this->input->post('Terms'),
			'Monthly' => $this->input->post('Monthly'), 
			'Maturity' => $this->input->post('Maturity'),
			'Amount' => $this->input->post('Amount'),
			'Intrest' => $this->input->post('Intrest'),
			'Due' => $this->input->post('Due'),
			'Colc' => $this->input->post('Colc'),
			'Parti' => $this->input->post('Parti'),
			'DocAmount' => $this->input->post('DocAmount'),
			'DocDetail' => $this->input->post('DocDetail')
			);
		$this->db->insert('op_principal',$datas);
		redirect('Principal/Open_Payment_Entry','refresh');
			}
			
		} 
		elseif (isset($p)) {
			$this->form_validation->set_rules('PName', 'PName', 'required|is_unique[op_principal.PName]');
			$this->form_validation->set_message('is_unique', 'The Account Name is already taken');
			
			if ($this->form_validation->run())
			{
			$data= array(
			'p' => $this->input->post('p'),
			'LDate' => $this->input->post('LDate'),
			'AcNo' => $this->input->post('AcNo'),
			'PName' => $this->input->post('PName'),
			'Terms' => $this->input->post('Terms'),
			'Monthly' => $this->input->post('Monthly'), 
			'Maturity' => $this->input->post('Maturity'),
			'Amount' => $this->input->post('Amount'),
			'Intrest' => $this->input->post('Intrest'),
			'Due' => $this->input->post('Due'),
			'Colc' => $this->input->post('Colc'),
			'Parti' => $this->input->post('Parti'),
			'DocAmount' => $this->input->post('DocAmount'),
			'DocDetail' => $this->input->post('DocDetail')
			);
		$this->db->insert('op_principal',$data);
		
		redirect('Principal/Payment_Entry','refresh');
		}
		
		}
		$data['query']=$this->User_model->viewPartyMaster();
		
		$this->load->view('Principal/Open_Payment_Entry',$data);
	
	}
	
	public function Payment_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$id = $this->input->post('Search');
		if (isset($id)) {
			$data['key']=$this->User_model->getPNamep();
			$this->load ->view('Principal/Open_Payment_Edit',$data);
		}
		$data['query']=$this->User_model->viewPartyMaster();
		$this->load->view('Principal/Payment_Entry',$data);
	}

	public function Payment_View()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$query = $this->db->get_Where('op_principal', array('p'=>22));
			$data['query']= $query;
		$this->load->view('Principal/Payment_View',$data);
	}
	
	public function Open_Payment_View()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['query'] = $this->db->get_Where('op_principal', array('op'=>11));
		$this->load->view('Principal/Open_Payment_View',$data);
	}
	public function Open_Payment_Edit2()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['key'] = $this->User_model->getPNameop();
		$this->load->view('Principal/Open_Payment_Edit',$data);
	}
	public function Payment_Edit2()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['key'] = $this->User_model->getPNamep();
		$this->load->view('Principal/Payment_Edit',$data);

	}
	public function Open_Payment_Edit($id)
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['key'] = $this->User_model->getPNamebb($id);
		$this->load->view('Principal/Open_Payment_Edit',$data);
	}
	public function Open_Payment_update($id)
	{
		
		$data= array(
			'Terms' => $this->input->post('Terms'),
			'LDate' => $this->input->post('LDate'),
			'AcNo' => $this->input->post('AcNo'),
			'PName' => $this->input->post('PName'),
			'Monthly' => $this->input->post('Monthly'),
			'Maturity' => $this->input->post('Maturity'),
			'Amount' => $this->input->post('Amount'),
			'Intrest' => $this->input->post('Intrest'),
			'Due' => $this->input->post('Due'),
			'Colc' => $this->input->post('Colc'),
			'Parti' => $this->input->post('Parti'),
			'DocAmount' => $this->input->post('DocAmount'),
			'DocDetail' => $this->input->post('DocDetail')
			);
		$this->db->where('AcNo', $id);
		$this->db->update('op_principal', $data);
		redirect('Principal/Open_Payment_Entry/','refresh');
		//print_r($data);
	}
	
	public function Payment_update($id)
	{
		$data= array(
			'Terms' => $this->input->post('Terms'),
			'CDate' => $this->input->post('CDate'),
			'AcNo' => $this->input->post('AcNo'),
			'Pname' => $this->input->post('Pname'),
			'Months' => $this->input->post('Months'), 
			'Weekly' => $this->input->post('Weekly'),
			'Dailly' => $this->input->post('Dailly'),
			'MaturityM' => $this->input->post('MaturityM'),
			'AmountM' => $this->input->post('AmountM'),
			'MaturityW' => $this->input->post('MaturityW'),
			'AmountW' => $this->input->post('AmountW'),
			'MaturityD' => $this->input->post('MaturityD'),
			'AmountD' => $this->input->post('AmountD'),
			'Intrest' => $this->input->post('Intrest'),
			'Due' => $this->input->post('Due'),
			'Colc' => $this->input->post('Colc'),
			'Parti' => $this->input->post('Parti'),
			'DocAmount' => $this->input->post('DocAmount'),
			'DocDetail' => $this->input->post('DocDetail')
			);
		$this->db->update('principal', $data, array('id' => $id));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Principal/Payment_View");
	}
	public function Open_Payment_Delete($id)
	{
		if($id == $id) 
		{
			$id = $this->db->where('id',$id);
			$this->db->delete('op_principal');
			$this->session->set_flashdata('success', 'Your data datelted Successfully..');
			redirect("Principal/Open_Payment_View");

		}
		else
		{
			$this->session->set_flashdata('error', 'Your data Not datele');
			redirect("Principal/Open_Payment_View");
		}


		
	}

	public function Open_Payment_Register()
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		
			$data['query'] = $this->User_model->Fromto_Op_Principal();
			
			$this->load->view('Principal/Open_Payment_Register',$data);

		
	}
	public function Payment_register()
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			
			$data['query'] = $this->User_model->FromtoPrincipal();
			
			$this->load->view('Principal/Payment_register',$data);

		
	}
	public function Payment_Delete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('principal');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Principal/Payment_View");

	}

	public function Open_Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		if($this->input->post('sbm') == "Op_Add") 
		{
			$data =  array(
				'Rcode' => $this->input->post('AcNo'),
				'RCDate' => $this->input->post('RCDate'),
				'RAmount' => $this->input->post('RAmount'),
				'BAmount' => $this->input->post('BAmount'),
				'AAmount' => $this->input->post('AAmount'),
				'payAmount' => $this->input->post('payAmount')
								
				);
			$this->db->insert('op_receipt', $data);
			redirect('Principal\Open_Receipt_Entry');
		}

		$data['query'] = $this->User_model->getPName3();
		$this->load->view('Principal\Open_Receipt_Entry',$data);
	}
	public function Op_Receipt_View()
	{

			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		
			$result['results']    =   $this->User_model->Op_Receipt_View();
			$res = $data + $result;
			$this->load->view('Principal/Op_Receipt_View',$res);

	}
	
	public function Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		if($this->input->post('sbm') == "Op_Add") 
		{
			$data =  array(
				'Rcode' => $this->input->post('AcNo'),
				'RCDate' => $this->input->post('RCDate'),
				'RAmount' => $this->input->post('RAmount'),
				'BAmount' => $this->input->post('BAmount'),
				'AAmount' => $this->input->post('AAmount'),
				'payAmount' => $this->input->post('payAmount')
								
				);
			$this->db->insert('op_receipt', $data);
			
			redirect('Principal\Receipt_Entry');

		}
		$data['query'] = $this->User_model->getPName33();
		//echo json_encode ($data['result']);
		$this->load->view('Principal\Receipt_Entry',$data);
	}

	public function Op_Receipt_add()
	{
		$data= array(
			'Pname' => $this->input->post('Pname'),
			'Terms' => $this->input->post('Terms'),
			'AcNo' => $this->input->post('AcNo'),
			'RCDate' => $this->input->post('RCDate'),
			'ClDate' => $this->input->post('ClDate'),
			'LDate' => $this->input->post('LDate'),
			'RAmount' => $this->input->post('RAmount'),
			'BAmount' => $this->input->post('BAmount'),
			'DAmount' => $this->input->post('DAmount'),
			'payAmount' => $this->input->post('payAmount'),
			'LAmount' => $this->input->post('LAmount'));
		$this->db->insert('op_receipt', $data);
		
		redirect('Principal/Op_Receipt_view','refresh');
	//	return $latest_id;

	}
	public function Receipt_add()
	{
		$data= array(
			'Pname' => $this->input->post('Pname'),
			'Terms' => $this->input->post('Terms'),
			'AcNo' => $this->input->post('AcNo'),
			'RCDate' => $this->input->post('RCDate'),
			'ClDate' => $this->input->post('ClDate'),
			'LDate' => $this->input->post('LDate'),
			'RAmount' => $this->input->post('RAmount'),
			'BAmount' => $this->input->post('BAmount'),
			'DAmount' => $this->input->post('DAmount'),
			'payAmount' => $this->input->post('payAmount'),
			'LAmount' => $this->input->post('LAmount'));
		$this->db->insert('receipt', $data);
		

		redirect('Principal/Receipt_view','refresh');
	//	return $latest_id;


	}
	public function Receipt_Edit($AcNo)
	{
	
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Principal/head', $data);
			
			$rows['query']=$this->User_model->viewReceipt($AcNo);
			
			$this->load->view('Principal/Receipt_Edit',$rows);
		


	}
	public function Receipt_Update($AcNo)
	{
		
		$data1 = array(
			'Pname' => $this->input->post('Pname'),
			'Terms' => $this->input->post('Terms'),
			'AcNo' => $this->input->post('AcNo'),
			'RCDate' => $this->input->post('RCDate'),
			'ClDate' => $this->input->post('ClDate'),
			'LDate' => $this->input->post('LDate'),
			'RAmount' => $this->input->post('RAmount'),
			'BAmount' => $this->input->post('BAmount'),
			'DAmount' => $this->input->post('DAmount'),
			'payAmount' => $this->input->post('payAmount'),
			'LAmount' => $this->input->post('LAmount'));

	    // do something with direct payment
		$this->db->insert('receipt', $data1);
		
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Principal/Receipt");
	}

	public function ReceiptDelete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('receipt');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Principal/Receipt");

	}

	public function Receipt_register()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$result['query'] = $this->User_model->FromtoReceipt();
		$res = $result + $data;
		$this->load->view('Principal/Receipt_register',$res);
	}

	public function CSV()
	{
		$this->load->dbutil();
		$this->load->helper('file');
		$this->load->helper('download');
		$delimiter = ",";
		$newline = "\r\n";
		$filename = "PaymentReport.csv";
		$query = "SELECT * FROM (SELECT CONCAT(MaturityM, ' ', MaturityW, ' ',MaturityD) as Maturity FROM op_principal ) op_principal WHERE 1" ;
		$result = $this->db->query($query);
		$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
		force_download($filename, $data);
	}

	

	public function Open_Receipt_Edit($AcNo,$VcNo)
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Principal/head', $data);
			
			$rows['query']=$this->User_model->Open_viewReceipt($AcNo,$VcNo);
			$this->load->view('Principal/Open_Receipt_Edit',$rows);
		
	}
	public function Open_Receipt_Edit2($AcNo,$VcNo)
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Principal/head', $data);
			
			$rows['query']=$this->User_model->Open_viewReceipt($AcNo,$VcNo);
			$this->load->view('Principal/Open_Receipt_Edit2',$rows);
		
	}

	public function Open_Receipt_Update($AcNo,$VcNo)
	{
		$VcNo = $_POST['VcNo'];
		if($VcNo == $VcNo)
		{
			$data1 = array(
				'Pname' => $this->input->post('Pname'),
				'Terms' => $this->input->post('Terms'),
				'AcNo' => $this->input->post('AcNo'),
				'VcNo' => $this->input->post('VcNo'),
				'RCDate' => $this->input->post('RCDate'),
				'ClDate' => $this->input->post('ClDate'),
				'LDate' => $this->input->post('LDate'),
				'RAmount' => $this->input->post('RAmount'),
				'BAmount' => $this->input->post('BAmount'),
				'DAmount' => $this->input->post('DAmount'),
				'DDate' => $this->input->post('DDate'),
				'payAmount' => $this->input->post('payAmount'),
				'LAmount' => $this->input->post('LAmount')
				);
			$this->db->insert('op_receipt', $data1);
		}
		else
		{
			$data2 = array(
				'VcNo' => $this->input->post('VcNo'),
				'AcNo' => $this->input->post('AcNo'),
				'RCDate' => $this->input->post('RCDate'),
				'LDate' => $this->input->post('LDate'),
				'RAmount' => $this->input->post('RAmount'),
				'BAmount' => $this->input->post('BAmount'),
				'payAmount' => $this->input->post('payAmount'));
			$this->db->update('op_receipt2', $data2, array('VcNo' => $VcNo));
		}
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Principal/Open_Receipt");
	}


	public function Open_ReceiptDelete($id)
	{
		$id = $this->db->where('id',$id);
		$this->db->delete('op_receipt');
		$this->session->set_flashdata('message', 'Your data datelted Successfully..');
		redirect("Principal/Open_Receipt");

	}
	public function Open_Receipt_register()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		//$data['query'] = $this->User_model->FromtoReceipt();
		$this->load->view('Principal/Open_Receipt_register',$data);
	}
	public function Open_Receipt_reg_check()
	{
		 $startdate = $this->input->post('SDate');
		 $enddate = $this->input->post('EDate');
		 $data['startdate'] = $startdate;
		 $data['enddate'] = $enddate;
		 $this->db->where('RCDate >=',$startdate);
		 $this->db->where('RCDate <=',$enddate);
		 $this->db->order_by('AcNo', 'ASC');
		 $this->db->join('op_principal', 'op_principal.AcNo = op_receipt.Rcode', 'left');
		 $this->db->join('parmaster', 'parmaster.PName = op_principal.PName', 'left outer');
      	 $this->db->join('country', ' country.countryid = parmaster.City','left outer');
     	 $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
		 $data['query'] = $this->db->get('op_receipt')->result_array();
		 $this->load->view('Principal/Open_Receipt_View', $data);
		 
	}
	public function autocomplete()
	{
		$search_data = $this->input->post('search_data');

		$result = $this->User_model->get_autocomplete($search_data);

		if (!empty($result))
		{
			foreach ($result as $row):
				echo "<li><a href='Pass_Book_Print/$row->AcNo'>" . $row->Pname . "</a></li>";
			endforeach;
		}
		else
		{
			echo "<li> Not found ... </li>";
		}

	}
	public function autocomplete2()
	{
                // load model
		

		$search_data2 = $this->input->post('search_data2');

		$result = $this->User_model->get_autocomplete2($search_data2);

		if (!empty($result))
		{
			foreach ($result as $row):
				echo "<li><a href='Open_Receipt_Entry/$row->AcNo'>" . $row->PName . "</a></li>";
			endforeach;
		}
		else
		{
			echo "<li> Not found ... </li>";
		}

	}
	
	
	public function Pass_Book()
	{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			
			$data['PName']= $this->User_model->getPass_BookPName();
			$this->load->view('Principal/Pass_Book', $data);
	
	}
	public function Pass_Book_Find()
	{
		
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			
			$AcNo = $this->input->post('search_data');
			$PName = $this->input->post('PName');
			if ($PName == True) {
			   $query = $this->db->select('*')->from('op_principal')->where('PName',$PName)->order_by("R_id", "ASC")
			   ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
			  $query = $this->db->get();
			   $data['rows'] = $query->row_array();
			   $data['result'] =  $query->result_array();
			  $this->load->view('Principal/Pass_Book_Print', $data);
			} else {
			  $this->db->where('AcNo', $AcNo);
			    $query = $this->db->select('*')->from('op_principal')->where('AcNo',$AcNo)->order_by("R_id", "ASC")
			   ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
			  $query = $this->db->get();
			  $data['rows'] = $query->row_array();
			  $data['result'] =  $query->result_array();
			$this->load->view('Principal/Pass_Book_Print', $data);
			}
			$this->load->view('Principal/Pass_Book_Print', $data);
		
	}
	public function PassBook_Print($AcNo,$PName)
	{
		
		
		$data['rows'] = $this->User_model->get_passbook($AcNo,$PName);
		$data['result'] = $this->User_model->get_passbook2($AcNo,$PName);
		$this->load->view('Principal\PassBook_Print', $data, FALSE);
	}
	public function Arrear_List()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->load->view('Principal\Arrear_List', $data);
	}
	public function Arrear_List_Print()
	{
		$data['query'] = $this->User_model->Arrlist();
		$this->load->view('Principal\Arrear_List_Print', $data);
	}
}



/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */