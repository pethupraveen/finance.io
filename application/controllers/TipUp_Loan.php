<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipUp_Loan extends CI_Controller {

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
		$query = $this->db->get('parmaster');    
		$data['PName']=$query->result_array();
		$data['query']=$this->User_model->viewAccMaster();
		$this->load->view('TipUp_Loan/Open_Payment_Entry', $data, FALSE);
	}
	public function Open_Payment_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];

			$op = $this->input->post('op');
		    $p = $this->input->post('p');
		    $Code = $this->input->post('Code');
		    if (isset($op)) {
		    $data=array(
		                'op' => $this->input->post('op'),
		                'TDate'=>$this->input->post('TDate'),
		                'TAcNo'=>$this->input->post('TAcNo'),
		                'TName'=>$this->input->post('TName'),
		                'TPart'=>$this->input->post('TPart'),
		                'TAmt'=>$this->input->post('TAmt'),
		                'TDDate'=>$this->input->post('TDDate'),
		                'TMode'=>$this->input->post('TMode'),
		                'TNDue'=>$this->input->post('TNDue'),
		                'TDAmt'=>$this->input->post('TDAmt'),
		                'TDCh'=>$this->input->post('TDCh'),
		                'TInt'=>$this->input->post('TInt'),
		                'TInAmt'=>$this->input->post('TInAmt'),
		                'TTotal'=>$this->input->post('TTotal'),
		                'TAddress'=>$this->input->post('TAddress'),
		                'TDDat'=>$this->input->post('TDDat')
		          );
		    $this->db->insert('tipup_payment',$data);
		 //  $latest_id = $this->User_model->get_latest_id_Tieup();

	   	//$data['table1_data']=$this->User_model->insert_table4($latest_id);
	   	redirect('TipUp_Loan/Open_Payment_Entry','refresh');
		    //better return true on success
			}
		elseif (isset($p)) 
		{
		 $data=array(
		                'p' => $this->input->post('p'),
		             	'TDate'=>$this->input->post('TDate'),
		                'TAcNo'=>$this->input->post('TAcNo'),
		                'TName'=>$this->input->post('TName'),
		                'TPart'=>$this->input->post('TPart'),
		                'TAmt'=>$this->input->post('TAmt'),
		                'TDDate'=>$this->input->post('TDDate'),
		                'TMode'=>$this->input->post('TMode'),
		                'TNDue'=>$this->input->post('TNDue'),
		                'TDAmt'=>$this->input->post('TDAmt'),
		                'TDCh'=>$this->input->post('TDCh'),
		                'TInt'=>$this->input->post('TInt'),
		                'TInAmt'=>$this->input->post('TInAmt'),
		                'TTotal'=>$this->input->post('TTotal'),
		                'TAddress'=>$this->input->post('TAddress'),
		                'TDDat'=>$this->input->post('TDDat')
		          );
		    $this->db->insert('tipup_payment',$data);
		    //better return true on success
		   // $latest_id=$this->User_model->get_latest_id_Tieup();
	   	//$data['table1_data']=$this->User_model->insert_table3($latest_id);
	   	redirect('TipUp_Loan/Payment_Entry','refresh');
		}
		elseif(isset($Code))
		{
			$data['r'] = $this->User_model->getTipUpPay();
			$this->load->view('TipUp_Loan/Open_Payment_Edit',$data);
		}
		else{
			$query = $this->db->get('parmaster');
			$data['query']=$this->User_model->viewAccMaster();    
			$data['PName']=$query->result_array();
			$this->load->view('TipUp_Loan/Open_Payment_Entry', $data, FALSE);
		}
		
		
		
	
	}
	public function Open_Payment_Edit()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->load->view('TipUp_Loan/Open_Payment_Edit', $data, FALSE);
	}
	public function Payment_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$query = $this->db->get('parmaster');
		$data['query']=$this->User_model->viewAccMaster();    
		$data['PName']=$query->result_array();
		$this->load->view('TipUp_Loan/Payment_Entry', $data, FALSE);
	}

	public function Open_Payment_Register()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		//$query = $this->db->get('tipup_payment');
		$data['PName']= $this->User_model->viewTieUpReg();
		$this->load->view('TipUp_Loan/Open_Payment_Register', $data, FALSE);
	}
	public function Payment_Register()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		//$query = $this->db->get('tipup_payment');
		$data['PName']= $this->User_model->viewTieUpReg2();
		$this->load->view('TipUp_Loan/Payment_Register', $data, FALSE);
	}
	public function Open_Payment_Print()
	{
		$data['startdate'] =$this->input->post('SDate');
		$data['enddate'] = $this->input->post('EDate');
		$PName  = $this->input->post('TName');
		$SDate  = $this->input->post('SDate');
		$EDate  = $this->input->post('EDate');
				
	  $this->db->where('TDate >=', $SDate);
	  $this->db->where('TDate <=', $EDate);
	  $this->db->where('op', 11);
	  $this->db->where_in('TName', $PName)->order_by("TDate",'ASC');
	  $this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer');
	  $this->db->join('country', ' country.countryid = parmaster.City','left outer');
  	  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
		$query = $this->db->get('tipup_payment');    
		$data['PName']=$query->result_array();
	 $this->load->view('TipUp_Loan\Open_Payment_Print', $data, FALSE);
	}

	public function Payment_Print()
	{
		$data['startdate'] =$this->input->post('SDate');
		$data['enddate'] = $this->input->post('EDate');
		$PName  = $this->input->post('TName');
		$SDate  = $this->input->post('SDate');
		$EDate  = $this->input->post('EDate');
				
	  $this->db->where('TDate >=', $SDate);
	  $this->db->where('TDate <=', $EDate);
	  $this->db->where('p', 22);
	  $this->db->where_in('TName', $PName)->order_by("TDate",'ASC');
      $this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer');
	  $this->db->join('country', ' country.countryid = parmaster.City','left outer');
  	  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
	$query = $this->db->get('tipup_payment');    
	$data['PName']=$query->result_array();
	 $this->load->view('TipUp_Loan\Payment_Print', $data, FALSE);
	}

	public function insert2(){

		  	$op = $this->input->post('op');
		    $p = $this->input->post('p');
		    if (isset($op)) {
		    $data=array(
		                'op' => $this->input->post('op'),
		                'TRAcNo'=>$this->input->post('TRAcNo'),
		                'TRDate'=>$this->input->post('TRDate'),
		                'TRBAmt'=>$this->input->post('TRBAmt'),
		                'TRRAmt'=>$this->input->post('TRRAmt'),
		                'TRAAmt'=>$this->input->post('TRAAmt'),
		                'TRNA'=>$this->input->post('TRNA')
		          );
		    $this->db->insert('tipup_receipt',$data);
		   // $latest_id = $this->User_model->get_latest_id_Tieup();
	   	//$data['table1_data']=$this->User_model->insert_table3($latest_id);
	   	redirect('TipUp_Loan/Open_Receipt_Entry','refresh');
		    //better return true on success
		}
		elseif (isset($p)) 
		{
		 $data=array(
		                'p' => $this->input->post('p'),
		             	'TRAcNo'=>$this->input->post('TRAcNo'),
		                'TRDate'=>$this->input->post('TRDate'),
		                'TRBAmt'=>$this->input->post('TRBAmt'),
		                'TRRAmt'=>$this->input->post('TRRAmt'),
		                'TRAAmt'=>$this->input->post('TRAAmt'),
		                'TRNA'=>$this->input->post('TRNA')
		          );
		    $this->db->insert('tipup_receipt',$data);
		    //better return true on success
		   // $latest_id=$this->User_model->get_latest_id_Tieup();
	   	//$data['table1_data']=$this->User_model->insert_table3($latest_id);
	   	redirect('TipUp_Loan/Receipt_Entry','refresh');
		}
		
	}
	
	public function get_AcNo()
	{
		$query = $this->db->query('SELECT MAX(TAcNo) AS `AcNo` FROM `tipup_payment` ORDER BY AcNo DESC LIMIT 1')->row_array();

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
	
	Public function get_countries()
	{

		$this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer')->group_by('TName');
		$query=$this->db->get('tipup_payment');
        $result= $query->result();
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->TName;
			$data['label']=$r->PName;
			$json[]=$data;
			
			
		}
		echo json_encode($json);
	
	}

	Public function get_states()
	{

		  $result=$this->db->where('TName',$_POST['id'])
						->get('tipup_payment')
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->TAcNo;
			$data['label']=$r->TAcNo;
			$json[]=$data;
			
			
		}
		echo json_encode($json);

	}
	
	public function Open_Receipt_Entry()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->load->view('TipUp_Loan/Open_Receipt_Entry',$data);
	}
	public function method()
	{
		
 		
		$TAcNo = $this->input->post('data');

		$query = $this->db->join('tipup_receipt', 'tipup_receipt.TRAcNo = tipup_payment.TAcNo', 'left outer')->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer')->order_by("TRid", "DESC")->limit(1)->get_where('tipup_payment',array('TAcNo'=>$TAcNo))->result();
		
   		 echo json_encode($query);
	}
	public function method3()
	{
		
		$TAcNo = 2;

		$query = $this->db->join('tipup_receipt', 'tipup_receipt.TRAcNo = tipup_payment.TAcNo', 'left outer')->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer')->order_by("TRid", "DESC")->limit(1)->get_where('tipup_payment',array('TAcNo'=>$TAcNo))->result();
		print_r($query);
	}
	public function Day_List()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		//$query = $this->db->get('tipup_payment');
		
		$this->load->view('TipUp_Loan/List', $data, FALSE);
	}


}

/* End of file tipUp_Loan.php */
/* Location: ./application/controllers/tipUp_Loan.php */