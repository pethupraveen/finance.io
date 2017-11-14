<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  function login($username, $password)
  {
   $this->db->select('id, username, password');
   $this->db->from('users');
   $this->db->where('username', $username);
   $this->db->where('password', $password);
   $this->db->limit(1);

   $query = $this->db-> get();

   if($query->num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 public function Region_Master()
 {
   $query = $this->db->select('*')->from('country');
   $query = $this->db-> get();
   return $query->result_array();
 }
 public function City_Master()
 {
   $query = $this->db->select('*')->from('State');
   $query = $this->db-> get();
   return $query->result_array();
 } 

 function search($keyword)
 {
   $this->load->database(); 
   $query = $this->db->select('*')
   ->from('op_principal')
   ->where('AcNo',$keyword);
   $query = $this->db-> get();
   return $query->result_array();
 }
 public function Op_Receipt_View()
 { 
  $this->load->database();
  $query = $this->db->select('*')->from('op_receipt');
  $query  =  $this->db->get();
  return $query->result();
}
public function getPNameop()
{
  $id = $this->input->post('Search');
 $query = $this->db->select('*')->from('op_principal')->where('AcNo',$id)->where('op',11);
 $query = $this->db->get();
 return $query->row_array();               
}
public function getPNamep()
{
  $id = $this->input->post('Search');
 $query = $this->db->select('*')->from('op_principal')->where('AcNo',$id)->where('p',22);
 $query = $this->db->get();
 return $query->row_array();               
}

public function getPNamebb($id)
{
 $query = $this->db->select('*')->from('op_principal')->where('AcNo',$id);
 $query = $this->db->get();
 return $query->row_array();               

}
function select_table_column($table_name, $column_name,$criteria = null, $id = null)
{
  $this->db->select($column_name);
  $this->db->from($table_name);

  if (!is_null($id)){
    $this->db->where('id', $id);
  }

  $this->db->order_by('id', 'desc');

  return $this->db->get()->result();
}
public function getFirst()
{
  $this->load->database();
  $this->db->limit(1);
  $query = $this->db->get('op_principal');
  return $query->row_array();
}
public function getFirst_button()
{
  $this->load->database();
  $this->db->limit(1);
  $query = $this->db->get('op_principal');
  return $query->row_array();
}
public function viewAccMaster()
{
$this->db->select('CONCAT(accName," ",city) AS name'); 
$this->db->from('accmaster');
 $query = $this->db->get();
  return $query->result_array();
}
public function getLast()
{
  $this->load->database();
  $query = $this->db->query("SELECT * FROM op_principal ORDER BY id DESC LIMIT 1");
  return $query->row_array();
}
public function getLast_button()
{
  $this->load->database();
  $query = $this->db->query("SELECT * FROM op_principal ORDER BY id DESC LIMIT 1");
  return $query->row_array();
}

public function new_try()
{
  $Search = $this->input->post('Search');
  $query= $this->db->get_Where('mop_principal', array('AcNo'=>$Search, 'op' => 11));
  return $query->row_array();
}
public function new_try2()
{
  $Search = $this->input->post('Search');
  $query= $this->db->get_Where('mop_principal', array('op' => 11));
  return $query->result_array();
}
public function getPName2($id)
{ 
  $query = $this->db->where('AcNo',$id);
  $query = $this->db->get('op_principal');  
  return $query->row_array();

}
public function getPName3()
{
    $id = $this->input->post('AcNo');
    $query = $this->db->select('*')->from('op_principal')->where('AcNo',$id)->where('op',11)->order_by("R_id", "DESC")->limit(1)
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','left');


 //$query = $this->db->select('*')->from('op_receipt')->where('AcNo',$id)->order_by("id", "DESC")->limit(1);

    //$query = $this->db->query("SELECT * FROM op_receipt WHERE AcNo = $id ORDER BY id DESC LIMIT 1");

 $query = $this->db->get();
  

 return $query->row_array();               

}
public function getPName33()
{
  $id = $this->input->post('AcNo2');
    $query = $this->db->select('*')->from('op_principal')->where('AcNo',$id)->where('p',22)->order_by("R_id", "DESC")->limit(1)
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','left');

 //$query = $this->db->select('*')->from('op_receipt')->where('AcNo',$id)->order_by("id", "DESC")->limit(1);

    //$query = $this->db->query("SELECT * FROM op_receipt WHERE AcNo = $id ORDER BY id DESC LIMIT 1");

 $query = $this->db->get();

 return $query->row_array();               

}


public function get_payment_PName($id)
{
 $this->load->database();
 $query = $this->db->select('*')
 ->from('principal')
 ->where('id',$id);
 $query = $this->db-> get();

 return $query->result_array();               

}
public function get_Op_AcNo($id)
{
  $sql=$this->db->query("SELECT * FROM op_principal where id = $id");
  return $sql->row_array();
}
public function get_p_AcNo($id)
{
  $sql=$this->db->query("SELECT * FROM principal where id = $id");
  return $sql->row_array();
}
public function get_latest_id_op_principal(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM op_principal");
  return $sql->row_array();
}
public function get_latest_id2_principal(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM principal");
  return $sql->row_array();
}
public function get_latest_id_op_receipt(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM op_receipt");
  return $sql->row_array();
}
public function get_latest_id2_receipt(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM receipt");
  return $sql->row_array();
} 
public function Op_AcNo_Principal($id)
{
 $sql=$this->db->query("SELECT * FROM principal where id = $id");
 return $sql->row_array();
}
public function Op_AcNo2_Op_Principal($id)
{
 $sql=$this->db->query("SELECT * FROM op_principal where id = $id");
 return $sql->row_array();
}
public function Op_Pname($id)
{
  $this->load->database();
  $query = $this->db->select('*')
  ->from('mop_payment')
  ->where('id',$id);
  $query = $this->db-> get();

  return $query->result_array();
}
public function Op_AcNo($id)
{
  $sql=$this->db->query("SELECT * FROM mop_principal where id = $id");
  return $sql->row_array();
}
public function Op_AcNo2($id)
{
  $sql=$this->db->query("SELECT * FROM m_payment where id = $id");
  return $sql->row_array();
}
function insert_table1(){
  $data=array(
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
  $this->db->insert('mop_payment',$data);
    //better return true on success
}

public function get_latest_id(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM mop_payment");
  return $sql->row_array();
} 

public function get_latest_id2(){
  $sql=$this->db->query("SELECT MAX(AcNo) as id FROM m_payment");
  return $sql->row_array();
} 

function insert_table2($table1_id)
{

 $data=array(
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
  'Total' => $this->input->post('Total'),
  'table1_id' => $this->db->insert_id()
  );
 $this->db->insert('m_payment',$data);
}
function insert_table3($table1_id)
{

 $data=array(
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
  'Total' => $this->input->post('Total'),
  'table1_id' => $this->db->insert_id()
  );
 $this->db->insert('m_payment',$data);
}
function insert_table4($table1_id){
    $data=array(
               'Tname'=>$this->input->post('Tname'),
               'TAmount'=>$this->input->post('TAmount'),
               'Per'=>$this->input->post('Per'),
               'TieUp_id'=>$table1_id['id']
          );
    $this->db->insert('tipup_details',$data);
}
function insert_table5($table1_id){
    $data=array(
               'RSDate'=>$this->input->post('RSDate'),
               'RSAmount'=>$this->input->post('RSAmount'),
               'TieUp_id'=>$table1_id['id']
          );
    $this->db->insert('repay_schedule',$data);
}
public function add_en()
{
  $PName = $this->input->post('PName');
  $this->db->select('*');
  $this->db->from('op_principal');
  $this->db->where('PName',$PName);
  $query = $this->db->get();
  if($query->num_rows()) 
  {
    $new_author = $query->result_array();
    foreach ($new_author as $row => $author)
    {
      $this->db->insert("op_receipt", $author);

    }
    $author = $query->result();
    return $author;
  }
  else
  {
    return false;
  }
}
public function fname()
{
  $query = $this->db->get('op_principal');
  return $query;
}



public function Pname()
{
  $PName = $this->input->post('PName');
  $this->db->select('*');
  $this->db->from('op_principal');
  $this->db->where('PName',$PName);
  
  $query = $this->db->get();
  if($query->num_rows() == 1)
  {
   return $query->result();
 }
 else
 {
   return false;
 }

}
public function VcNo()
{
 $VcNo = $this->input->post('VcNo');
 $this->db->select('*');
 $this->db->from('op_receipt');
 $this->db->where('VcNo',$VcNo);

 $query = $this->db->get();
 if($query->num_rows() == 1)
 {
   return $query->result();
 }
 else
 {
   return false;
 }

}
public function VcNo2()
{
 $VcNo = $this->input->post('VcNo');
 $this->db->select('*');
 $this->db->from('op_receipt2');
 $this->db->where('VcNo',$VcNo);

 $query = $this->db->get();
 if($query->num_rows() == 1)
 {
   return $query->result();
 }
 else
 {
   return false;
 }

}
public function select_all()
{
  $query = $this->db->get('op_principal');
  $new_author = $query->result();
  return $new_author;
}

public function getStudents()
{
  $query = $this->db->get('op_principal');
  return $query;
}
public function getStudentsWhereLike($search)
{
  $query = $this->db->like($search)->get('op_principal');
  return $query;
}
public function viewMaster()
{
  $query= $this->db->get('accmaster');
  return $query;
}
public function get_latest_id_T(){
        $sql=$this->db->query("SELECT MAX(AcNo) as id  FROM `dop_receipt`");
        return $sql->row_array();
    } 
  public function get_latest_id_Tieup(){
        $sql=$this->db->query("SELECT MAX(TAcNo) as id  FROM `tipup_payment`");
        return $sql->row_array();
    } 


public function viewTieUpReg()
{
  $this->db->select('*');    
  $this->db->from('tipup_payment');
  $this->db->where('op', 11)->group_by('TName');
  $this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer');
  $this->db->join('country', ' country.countryid = parmaster.City','left outer');
  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
  $query = $this->db->get(); 

  return $query->result_array(); 
}
public function viewTieUpReg2()
{
  $this->db->select('*');    
  $this->db->from('tipup_payment');
  $this->db->where('p', 22);
  $this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer');
  $this->db->join('country', ' country.countryid = parmaster.City','left outer');
  $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
  $query = $this->db->get(); 

  return $query->result_array(); 
}


public function viewReDeposit()
{
  $this->db->select('*');    
      $this->db->from('dop_receipt');
     
      $this->db->join('parmaster', 'parmaster.pcode = dop_receipt.pcode', 'left outer');
      $this->db->join('country', ' country.countryid = parmaster.City','left outer');
      $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
      $query = $this->db->get(); 

  return $query->result_array(); 
}
public function viewReDepositReg()
{
  $startdate = $this->input->post('SDate');
  $enddate = $this->input->post('EDate');

      $this->db->select('*');    
      $this->db->from('dop_receipt');
      $this->db->join('parmaster', 'parmaster.PName = dop_receipt.PName', 'left outer');
      $this->db->join('country', ' country.countryid = parmaster.City','left outer');
      $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
      $this->db->where('RDate >=', date('m/d/Y', strtotime($startdate)));
      $this->db->where('RDate <=', date('m/d/Y', strtotime($enddate)));
     // $this->db->where('PName',$PName);

      $query = $this->db->get(); 

  return $query->result_array(); 
}
public function viewReDepositPName()
{
  $startdate = $this->input->post('SDate');
  $enddate = $this->input->post('EDate');
  $PName = $this->input->post('EDate');

      $this->db->select('*');    
      $this->db->from('dop_receipt');
      $this->db->join('country', ' country.countryid = parmaster.City','left outer');
      $this->db->join('state', 'state.id = parmaster.Area', 'left outer');
      $this->db->where('RDate >=', date('m/d/Y', strtotime($startdate)));
      $this->db->where('RDate <=', date('m/d/Y', strtotime($enddate)));
      $this->db->where('PName',$PName);

      $query = $this->db->get(); 

  return $query->result_array(); 
}

public function viewPartyMaster()
{
  $query= $this->db->get('parmaster');
  return $query->result_array();
}
public function FindAcNo()
{
  $query = $this->db->query('SELECT MAX(AcNo)+1 AS `AcNo`,`p` FROM `op_principal` ORDER BY AcNo DESC LIMIT 1');
  return $query->row_array();
}
public function FindAcNo2()
{
  $query = $this->db->query('SELECT MAX(AcNo)+1 as `AcNo` FROM `op_principal` ORDER BY AcNo DESC LIMIT 1');
  return $query->row_array();
}
public function FindMPAcNo()
{
  $query = $this->db->query('SELECT MAX(AcNo)+1 AS `AcNo`,`p` FROM `mop_principal` ORDER BY AcNo DESC LIMIT 1');
  return $query->row_array();
}
public function FindMPAcNo2()
{
  $query = $this->db->query('SELECT MAX(AcNo)+1 AS `AcNo`, `op` FROM `mop_principal` ORDER BY AcNo DESC LIMIT 1');
  return $query->row_array();
}
public function viewPartyMasterone()
{
  $this->db->select_max('id');
  $query = $this->db->get('op_principal');
  return $query->row();

}
public function Open_Payment_Print($AcNo)
{
 $this->db->select('*');
  $this->db->from('parmaster');
 $this->db->Where('AcNo', $AcNo);
$this->db->join('mop_principal', 'mop_principal.PName = parmaster.PName');
 $this->db->Where('op', 11);
  $query = $this->db->get();    

  return $query->row_array();  
}
public function Payment_Print($AcNo)
{
   $this->db->select('*');
  $this->db->from('parmaster');
 $this->db->Where('AcNo', $AcNo);
$this->db->join('mop_principal', 'mop_principal.PName = parmaster.PName');
 $this->db->Where('p', 22);
  $query = $this->db->get();    

  return $query->row_array(); 
}
public function Op_View()
{
  $query=  $this->db->get_Where('mop_principal', array('op'=>11));
  return $query;
}
public function P_View()
{
  $query=  $this->db->get_Where('mop_principal', array('p'=>22));

  return $query;
}

public function AcNo()
{
  $query = $this->db->query('SELECT MAX(id)+1 AS `id` FROM `mop_payment`');
  return $query->row();     
}
public function AcNo2()
{
  $this->db->select('mop_payment.*,m_payment.*');
  $this->db->from('mop_payment');
  $this->db->join('m_payment', 'mop_payment.id = m_payment.id', 'left'); 
  $query = $this->db->get();
  return $query->result();

}


public function viewopPrincipal()
{
  $query=  $this->db->get_Where('op_principal', array('op'=>11));
  return $query;
}
public function op_viewReceiptAll()
{
  $query= $this->db->get('op_receipt');
  return $query;
}
public function MOR_Search()
{
   $search = $this->input->post('search');
      $this->db->select('*')->from('mop_principal')->where('AcNo', $search)->where('op', 11)->
      order_by("R_id",'DESC')->limit(1)->join('mop_receipt','mop_principal.AcNo = mop_receipt.Rcode','left');
     $query = $this->db->get();

   return $query->row_array();

}
public function MR_Search()
{
   $search = $this->input->post('search');
    $this->db->select('*')->from('mop_principal')->where('AcNo', $search)->where('p', 22)->
      order_by("R_id",'DESC')->limit(1)->join('mop_receipt','mop_principal.AcNo = mop_receipt.Rcode','left');
     $query = $this->db->get();

   return $query->row_array();

}
public function MOR_New()
{
  $search = $this->input->post('search');
      $this->db->select('*');
      $this->db->from('mop_principal');
      $this->db->where('AcNo', $search);
       $this->db->where('op', 11);
     $query = $this->db->get();

   return $query->row_array();

}
public function MR_New()
{
  $search = $this->input->post('search');
      $this->db->select('*');
      $this->db->from('mop_principal');
      $this->db->where('AcNo', $search);
      $this->db->where('p', 22);
     $query = $this->db->get();

   return $query->row_array();

}

public function Principallist()
{
  $this->db->select('*');
  $this->db->from('principal');
  
  $this->db->order_by('id', 'DESC');
  $this->db->limit(1);

  $query = $this->db->get();

  if($query->num_rows() == 1)
  {
   return $query->result();
 }
 else
 {
   return false;
 }
}

public function PrincipalLogin($Pname)
{
  $this->db-> select('id, Pname');
  $this->db-> from('principal');
  $this->db-> where('Pname', $Pname);
  $this->db-> limit(1);

  $query = $this->db->get();

  if($query->num_rows() == 1)
  {
   return $query->result();
 }
 else
 {
   return false;
 }
}

public function getonerow($id)
{
  $this->db->where('id', $id);
  $query = $this->db->get('accmaster');
  return $query->row();
}
public function getoneCode($id)
{
  $this->db->where('id', $id);
  $query = $this->db->get('accmaster');
  return $query->row();
}
public function getTipUpPay()
{
  $Code = $this->input->post('Code');
  $this->db->where('TAcNo', $Code);
   $this->db->join('parmaster', 'parmaster.pcode = tipup_payment.TName', 'left outer');
  $query = $this->db->get('tipup_payment');
  return $query->row();
}


public function getBalance($Code)
{
  $this->db->where('Code', $Code);
  $query = $this->db->get('master');
  return $query->row();
}
public function getgName()
{
  $this->load->database();
  $this->db->select("*");
  $this->db->from("groups");
  $query=$this->db->get();
  return $query->result();    
}
public function getsubName()
{
  $this->load->database();
  $this->db->select("*");
  $this->db->from("subgroup");
  $query=$this->db->get();
  return $query->result();    
}
public function getaccName()
{
  $this->load->database();
  $this->db->select("*");
  $this->db->from("accmaster");
  $query=$this->db->get();
  return $query->result();    
}

public function name_exists($key)
{
  $this->db->where('PName',$key);
  $query = $this->db->get('parmaster');
  if ($query->num_rows() > 0){
    return true;
  }
  else{
    return false;
  }
}
public function MPayment_Print($id)
{
  $this->db->select("*");
  $this->db->from("mop_principal");
  $this->db->where('id', $id);
  $this->db->where('p', 22);
  $query=$this->db->get();
  return $query->result_array();   
}


public function getprincipal()
{   

  $this->load->database();
  $this->db->select("*");
  $this->db->from("principal");
  $query=$this->db->get();
  return $query->result();    
}

function get_default() 
{
 $this->load->database();
 $this->db->select_max("id");
 $this->db->from("principal");
 $query = $this->db->get();
 return $query->result();
}

public function getonerowPrincipal($id)
{
  $this->db->where('id', $id);
  $query = $this->db->get('principal');
  return $query->row();
}
public function getoPrincipal($AcNo)
{
  $this->db->where('AcNo', $AcNo);
  $query = $this->db->get('op_principal');
  return $query->row();
}
public function Open_viewReceipt3($AcNo)
{
 $this->db->where('AcNo', $AcNo);
 $query= $this->db->get('op_receipt2');
 return $query;
}

public function viewReceipt($AcNo)
{
  $this->db->where('AcNo', $AcNo);
  $query= $this->db->get('receipt');
  return $query->row();
}
public function Open_viewReceipt($AcNo,$VcNo)
{
 if($AcNo == $VcNo )
 {
   $this->db->where('AcNo', $AcNo);
   $query= $this->db->get('op_receipt');
   return $query->row(); 
 }
 else
 {
   $this->db->where('AcNo', $AcNo);
   $this->db->where('VcNo', $VcNo);
   $query= $this->db->get('op_receipt');
   return $query->row();
 }


}


public function Open_viewReceipt2($AcNo)
{
  $this->db->where('AcNo', $AcNo);
  $query= $this->db->get('op_receipt');
  return $query->row();
}
public function viewReceiptAll()
{
  $query= $this->db->get('receipt');
  return $query;
}


public function FromtoReceipt()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 echo $startdate;
 echo $enddate;
 
}
public function FromtoPrincipal()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 $this->db->select("*");
 $this->db->select("Maturity");

 $this->db->from('op_principal');
 //$this->db->from('principal');
 
 $this->db->where('LDate >=',$startdate);
 $this->db->where('LDate <=',$enddate);
 $this->db->where('p', 22);
// $this->db->where('Maturity BETWEEN "'. date('m/d/Y', strtotime($startdate)). '" and "'. date('m/d/Y', strtotime($enddate)).'"');
 $query = $this->db->get();
 return $query;    
}
public function Fromto_Op_Principal()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 //$this->db->where('LDate >=',$startdate);
 //$this->db->where('LDate <=',$enddate);
 $this->db->where('LDate BETWEEN "'. $startdate. '" and "'. $enddate.'"');
 $this->db->where('op', 11);
 $query = $this->db->get('op_principal');
 return $query;    
}
public function FromtoMOPrincipal()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 $this->db->select("*");
 $this->db->from('mop_principal');
 //$this->db->from('principal');
 
 $this->db->where('MCDate >=', date('m/d/Y', strtotime($startdate)));
 $this->db->where('MCDate <=', date('m/d/Y', strtotime($enddate)));
 $this->db->where('op', 11);
// $this->db->where('Maturity BETWEEN "'. date('m/d/Y', strtotime($startdate)). '" and "'. date('m/d/Y', strtotime($enddate)).'"');
 $query = $this->db->get();
 return $query->result_array();    
}
public function FromtoMOReceipt()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 $this->db->select("*");
 $this->db->from('mop_principal');
 $this->db->join('mop_receipt','mop_principal.AcNo = mop_receipt.Rcode','left');
 $this->db->order_by('R_id');
 $this->db->group_by('Rcode');
 
 $this->db->where('MCDate >=', date('m/d/Y', strtotime($startdate)));
 $this->db->where('MCDate <=', date('m/d/Y', strtotime($enddate)));
 $this->db->where('op', 11);
 //$this->db->where('BAmount', 0);
 // $this->db->where('Maturity BETWEEN "'. date('m/d/Y', strtotime($startdate)). '" and "'. date('m/d/Y', strtotime($enddate)).'"');
 $query = $this->db->get();
 return $query->result_array();    
}

public function FromtoMReceipt()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 $this->db->select("*");
 $this->db->from('mop_receipt');
 //$this->db->from('principal');
 
 $this->db->where('LDate >=', date('m/d/Y', strtotime($startdate)));
 $this->db->where('LDate <=', date('m/d/Y', strtotime($enddate)));
 $this->db->where('p', 22);
 
 $this->db->order_by('id', 'ASC');


// $this->db->where('Maturity BETWEEN "'. date('m/d/Y', strtotime($startdate)). '" and "'. date('m/d/Y', strtotime($enddate)).'"');
 $query = $this->db->get();
 return $query->result_array();    
}

public function FromtoMPrincipal()
{
 $startdate = $this->input->post('SDate');
 $enddate = $this->input->post('EDate');
 $this->db->select("*");
 $this->db->from('mop_principal');
 //$this->db->from('principal');
 
 $this->db->where('MCDate >=', date('m/d/Y', strtotime($startdate)));
 $this->db->where('MCDate <=', date('m/d/Y', strtotime($enddate)));
 $this->db->where('p', 22);
// $this->db->where('Maturity BETWEEN "'. date('m/d/Y', strtotime($startdate)). '" and "'. date('m/d/Y', strtotime($enddate)).'"');
 $query = $this->db->get();
 return $query->result_array();    
}


public function get_autocomplete($search_data)
{
  $this->db->select('PName, AcNo');
  $this->db->like('AcNo', $search_data);
  return $this->db->get('op_receipt', 10)->result();
}
public function get_autocomplete3($search_data)
{
  $this->db->select('PName, id');
  $this->db->like('id', $search_data);
  return $this->db->get('parmaster', 10)->result();
}
public function get_autocomplete2($search_data2)
{
  $this->db->select('PName, AcNo');
  $this->db->like('PName', $search_data2);
  return $this->db->get('op_principal', 10)->result();
}
public function get_passbook($AcNo,$PName)
{
  if ($PName == True) {
   // $this->db->where('PName', $PName);
     $query = $this->db->select('*')->from('op_principal')->where('PName',$PName)->order_by("R_id", "DESC")->limit(1)
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
    $query = $this->db->get();

    return $query->row_array();
  } else {
    $this->db->where('AcNo', $AcNo);
      $query = $this->db->select('*')->from('op_principal')->where('AcNo',$AcNo)->order_by("R_id", "DESC")->limit(1)
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
    $query = $this->db->get();
     return $query->row_array();

  }
}
public function get_passbook2($AcNo,$PName)
{
 if ($PName == True) {
 // $this->db->where('PName', $PName);
    $query = $this->db->select('*')->from('op_principal')->where('PName',$PName)->order_by("R_id", "ASC")
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
  $query = $this->db->get();
  return $query->result_array();

} else {
  $this->db->where('AcNo', $AcNo);
   $query = $this->db->select('*')->from('op_principal')->where('AcNo',$AcNo)->order_by("R_id", "ASC")
     ->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','INNER');
  $query = $this->db->get();
  return $query->result_array();

    # code...
}

}public function get_passbook_mop($AcNo)
{
     $this->db->where('AcNo', $AcNo);
    $query = $this->db->get('mop_receipt');
    return $query->row_array();

}
public function get_passbook2_mop($AcNo)
{
  $this->db->where('AcNo', $AcNo);
  $query = $this->db->get('mop_receipt');
  return $query->result_array();
}
public function getPass_BookPName()
{
  $this->db->select('*');
 // $this->db->group_by('PName'); 
 // $this->db->order_by('AcNo', 'desc'); 
  $this->db->from('op_principal');
  $query = $this->db->get();
  return $query->result_array();
}
public function getPass_BookPName_mop()
{
  $this->db->select('*');
  $this->db->from('mop_principal');

  $query = $this->db->get();
  return $query->result_array();
}
public function Arrlist()
{
  $Terms = $this->input->post('Terms');
  $LDate = $this->input->post('LDate');
  $this->db->where('Terms', $Terms);
 $this->db->select('*')->from('op_principal')->join('op_receipt','op_principal.AcNo = op_receipt.Rcode','left')->order_by('BAmount')->LIMIT(1);
 $query = $this->db->get()->result_array();
 return $query;
}
}
?>
