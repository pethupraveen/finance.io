<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
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
		$data['query']=$this->User_model->viewAccMaster();
		$data['query2']=$this->User_model->viewPartyMaster();
		$this->load->view('Deposit/Open_Receipt_Entry', $data, FALSE);
		
	}
	public function Open_Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['query']=$this->User_model->viewAccMaster();
		$data['query2']=$this->User_model->viewPartyMaster();
		$this->load->view('Deposit/Open_Receipt_Entry', $data, FALSE);
		
	}
	public function insert(){

		  $op = $this->input->post('op');
		    $p = $this->input->post('p');
		    if (isset($op)) {
		    $data=array(
		                'op' => $this->input->post('op'),
		                'RDate'=>$this->input->post('RDate'),
		                'AcNo'=>$this->input->post('AcNo'),
		                'pcode'=>$this->input->post('pcode'),
		                'feature'=>$this->input->post('feature'),
		                'Amount'=>$this->input->post('Amount'),
		                'Interest'=>$this->input->post('Interest'),
		                'Doc_detail'=>$this->input->post('Doc_detail'),
		          );
		    $this->db->insert('dop_receipt',$data);
		  //  $latest_id=$this->User_model->get_latest_id_T();
	   	//$data['table1_data']=$this->User_model->insert_table4($latest_id);
	   	redirect('Deposit/Open_Receipt_Entry','refresh');
		    //better return true on success
		}
		elseif (isset($p)) 
		{
		 $data=array(
		                'p' => $this->input->post('p'),
		                'RDate'=>$this->input->post('RDate'),
		                'AcNo'=>$this->input->post('AcNo'),
		                'pcode'=>$this->input->post('pcode'),
		                'feature'=>$this->input->post('feature'),
		                'Amount'=>$this->input->post('Amount'),
		                'Interest'=>$this->input->post('Interest'),
		                'Doc_detail'=>$this->input->post('Doc_detail'),
		          );
		    $this->db->insert('dop_receipt',$data);
		    //better return true on success
		    //$latest_id=$this->User_model->get_latest_id_T();
	   	// 	$data['table1_data']=$this->User_model->insert_table4($latest_id);
	   	redirect('Deposit/Receipt_Entry','refresh');
		}
		
	}
		
	
	public function Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['query']=$this->User_model->viewAccMaster();
		$data['query2']=$this->User_model->viewPartyMaster();
		$this->load->view('Deposit/Receipt_Entry', $data, FALSE);
		
	}
	

	public function get_pay()
	{
		$search = $this->input->post('id');
		$query = $this->db->query('SELECT * FROM `dop_receipt` Where id = $search AND ORDER BY id DESC LIMIT 1')->row_array();
	  
			   
  		echo json_encode ($message); 
	}
	public function get_AcNo()
	{
		$query = $this->db->query('SELECT MAX(AcNo) AS `AcNo` FROM `dop_receipt` ORDER BY AcNo DESC LIMIT 1')->row_array();
		
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
	public function get_PName()
	{
		$query = $this->db->query('SELECT * FROM `parmaster`')->result();
		$data=array();
		foreach($query as $r)
		{
			$data['value']=$r->PName;
			$json[]=$data;
			
		}
		echo json_encode ($json); 
	}
	public function Open_Receipt_ViewAll()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['query']=$this->User_model->viewReDeposit();
		$this->load->view('Deposit/Open_Receipt_ViewAll', $data, FALSE);
		
	}
	public function Open_Receipt_Register()
	{		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
			  
		$this->db->select('*');    
		$this->db->from('dop_receipt');
		
	  		$this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'left');
		$query = $this->db->get();    
		$data['PName']=$query->result_array();
		
		$this->load->view('Deposit/Open_Receipt_Register', $data, FALSE);
			
		
	}
	public function Receipt_Register()
	{		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->db->select('*');    
		$this->db->from('dop_receipt');
		$this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'left');
		$query = $this->db->get();    
		$data['PName']=$query->result_array();
		
		$this->load->view('Deposit/Receipt_Register', $data, FALSE);
			
		
	}
	public function Open_Receipt_Search()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['startdate'] =$this->input->post('SDate');
		$data['enddate'] = $this->input->post('EDate');
			
		$startdate = $this->input->post('SDate');
	  	$enddate = $this->input->post('EDate');
	  	$PName = $this->input->post('PName');
	  	
	    if (isset($PName)) {

	  	$ids = array();
		foreach ($PName as $id)
	    {
	        $ids[] = $id;
	    }
	    	$this->db->select('*');    
			$this->db->from('dop_receipt');
			$this->db->join('parmaster', 'dop_receipt.pcode = parmaster.pcode', 'INNER');
			$this->db->join('country', 'parmaster.City = country.countryid','INNER');
			$this->db->join('state', 'parmaster.Area = state.id', 'INNER');
			$this->db->Where_in('PName', $ids);
			$query = $this->db->get();    
			$data['PName']=$query->result_array();
	   		$this->load->view('Deposit/Open_Receipt_Register1', $data);
	    } else {
	   		$this->db->select('*');    
			$this->db->from('dop_receipt');
			$this->db->join('parmaster', 'dop_receipt.pcode = parmaster.pcode', 'INNER');
			$this->db->where('RDate >=', date('d/m/Y', strtotime($startdate)));
 			$this->db->where('RDate <=', date('d/m/Y', strtotime($enddate)));
			$query = $this->db->get();    
			$data['PName']=$query->result_array();
	   		$this->load->view('Deposit/Open_Receipt_Register1', $data);
	    	# code...
	    }
	}
	public function Open_Receipt_Print($AcNo)
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->db->select('*');    
		$this->db->from('parmaster');
		$this->db->Where('AcNo', $AcNo);
		$this->db->join('country', 'parmaster.City = country.countryid','left outer');
		$this->db->join('state', 'parmaster.Area = state.id', 'left outer');
		$this->db->join('dop_receipt', 'dop_receipt.PName = parmaster.PName', 'left outer');
		$query = $this->db->get();    
		$data['result'] =  $query->row_array();  
		$data['row'] = $query->result_array();
		$this->load->view('Deposit/Open_Receipt_Print', $data);
		

	}

	public function Open_Payment_Entry()
	{
		
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		if($this->input->post('sbm') == "Op_Add") 
		{
		$DBAmt = $this->input->post('DBAmt');
		$DAmt = $this->input->post('DAmt');
		$RLAmt = $this->input->post('RLAmt');
		$IPAmt = $this->input->post('IPAmt');
		

			if ($DBAmt == '') {
	 			
	 			$DBAmt = $DAmt - $RLAmt;
	 				
	 		}
	 		else if ($DAmt >= $DBAmt) {
	 			$DBAmt -= $RLAmt;
	 				
	 		}
 			 	
		$data =  array(
			'P_AcNo' => $this->input->post('P_AcNo'),
			'DDate' => $this->input->post('date1'),
			'DAmt' => $this->input->post('DAmt'),
			'DPAmt' => $this->input->post('RLAmt'),
			'DBAmt' => $DBAmt,
			'Total' => $this->input->post('Total'),
			'IAmt' => $this->input->post('IAmt'),
			'IPAmt' => $this->input->post('RIAmt'),
			'IBAmt' => $this->input->post('IBAmt'),
			'RLAmt' => $this->input->post('RLAmt'),
			'RIAmt' => $this->input->post('RIAmt'),
			'Parti' => $this->input->post('Parti'),
			);
		$this->db->insert('dop_payment', $data);
		
		redirect('Deposit\Open_Payment_Entry');
		
		
	  	}
	  	if($this->input->post('sbm') == "Op_Search") 
		{
	  	
		$search = $this->input->post('P_AcNo');
		
		$this->db->select('*')->from('dop_receipt')->where('AcNo', $search)->order_by("P_id",'DESC')->limit(1);
		$this->db->join('dop_payment', 'dop_payment.P_AcNo = dop_receipt.AcNo', 'left');
		$this->db->join('parmaster', 'dop_receipt.pcode = parmaster.pcode', 'INNER');
	    $this->db->join('country', ' country.countryid = parmaster.City','INNER');
	    $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
	   	$query = $this->db->get();
		$data['query'] = $query->row_array();
		$this->load->view('Deposit/Open_Payment_Entry', $data);
	  	}
	  	else{
	  		$this->load->view('Deposit/Open_Payment_Entry2', $data);
	  	}
		
	}
	public function Open_Payment_Register()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->db->select('*');    
		$this->db->from('dop_receipt');
	  	$this->db->join('parmaster', 'dop_receipt.pcode = parmaster.pcode', 'INNER');
      
		$query = $this->db->get();    
		$data['PName']=$query->result_array();
		$this->load->view('Deposit/Open_Payment_Register', $data, FALSE);
	}
	public function Open_Payment_Print()
	{
		$data['startdate'] =$this->input->post('SDate');
		$data['enddate'] = $this->input->post('EDate');
		$PName  = $this->input->post('pcode');
		$SDate  = $this->input->post('SDate');
		$EDate  = $this->input->post('EDate');
		
		
	  $this->db->where('DDate >=', $SDate);
	  $this->db->where('DDate <=', $EDate);
	  $this->db->where_in('PName', $PName)->order_by("DDate",'ASC');
	  $this->db->join('dop_payment', 'dop_payment.P_AcNo = dop_receipt.AcNo', 'left');
	  $this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'INNER');
	  $this->db->join('country', ' country.countryid = parmaster.City','INNER');
	  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
		$query = $this->db->get('dop_receipt');    
		$data['PName']=$query->result_array();
	    $this->load->view('Deposit\Open_Payment_Print', $data, FALSE);
     	
		
	   	
	}
	public function Pass_book()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->db->select('*');
		$this->db->from('dop_receipt');
		$this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'INNER');
		$query = $this->db->get();
		$data['result']= $query->result_array();
		$this->load->view('Deposit/Pass_Book', $data);

	}
		public function Pass_Book_Find()
		{
		   
			$AcNo = $this->input->post('AcNo');
			$PName2 = $this->input->post('PName');
			if (isset($_POST['PName'])) {

	  			$this->db->where('PName', $PName2);
				 $this->db->join('dop_payment', 'dop_payment.P_AcNo = dop_receipt.AcNo', 'left');
			  $this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'INNER');
			  $this->db->join('country', ' country.countryid = parmaster.City','INNER');
			  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
	     		$query = $this->db->get('dop_receipt');
				$data['result'] = $query->row_array();
				$data['results'] = $query->result_array();
				$this->load->view('Deposit/Pass_Book_Print', $data);
				//$query = $this->db->get_Where('mop_principal', array('AcNo'=>$AcNo));
			}
			

		}
	public function Outstanding_List()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$this->db->select('*');
		$this->db->from('dop_receipt');
		$this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'INNER');
		$query = $this->db->get();
		$data['result']= $query->result_array();
		$this->load->view('Deposit/Outstanding_List', $data);
	}



}

/* End of file deposit.php */
/* Location: ./application/controllers/deposit.php */