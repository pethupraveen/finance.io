<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Search_model');
 }

 function index()
 {

if ($this->session->userdata('logged_in')>2)
{
       $session_data = $this->session->userdata('logged_in');
       $data['username'] = $session_data['username'];
      
      $data['results'] = $this->Search_model->searchbyname();
     $this->load->view('Dashboard', $data);
     //If no session, redirect to login page
   
}
else{
  redirect('login','refresh');
}
  
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Dashboard', 'refresh');
 }

 public function getdata()
   {
   if(isset($_POST['search_data'])){
      $name=$_POST['search_data'];
    }
    $this->load->model('Search_model');
    // WHERE link2 LIKE ('$name%') and LEFT JOIN `links2` ON `links`.`id` = `links2`.`link1_id` GROUP BY `link1_id`");
    //
   $query = $this->db->query("SELECT * FROM `links` WHERE link1 = $name");
    $data['row'] = $query->result();
    $this->load->view('Dashboard_view', $data);

   }
    Public function get_countries()
    {
      $query=$this->db->get('links');
           $result= $query->result();
           $data=array();
      foreach($result as $r)
      {
        $data['value']=$r->id;
        $data['label']=$r->link1;
        $json[]=$data;
        
        
      }
      echo json_encode($json);
    
    }

    Public function get_states()
    {

        $result=$this->db->where('link1_id',$_POST['id'])
              ->get('links2')
              ->result();
        
           $data=array();
      foreach($result as $r)
      {
        $data['value']=$r->l_id;
        $data['label']=$r->link2;
        $json[]=$data;
        
        
      }
      echo json_encode($json);

    }

}

?>