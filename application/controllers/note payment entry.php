public function Open_Payment_Entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			//$this->load->view('Principal/head',$data);
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			$ins = $this->User_model->get_latest_id_op_principal();
			//$ins2 = $this->session->userdata('insert_id2');
			$ins3 = $this->session->userdata('insert3');
			if ($ins > $ins3 ) {
				$data2=array(
					'AcNo' => $ins['id']+1
					);
			//print_r($data2);
			//return $data2;
				# code...
			}
			else
			{
				$data2=array(
					'AcNo' => $ins3['id']+1
					);
			//print_r($data2);
			//return $data2;
				# code...
			}
			$res = $data + $result + $data2;
			$this->load->view('Principal/Open_Payment_Entry',$res);

		}
		else
		{
	//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}
	public function Payment_Entry()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->model('User_model');
			$result['query']=$this->User_model->viewPartyMaster();
			//$latest_id =$this->User_model->get_latest_id();
			$ins =$this->session->userdata('insert_id3');
			$ins3 = $this->session->userdata('insert3');
			if ($ins > $ins3 ) {
				$data2=array(
					'AcNo' => $ins['id']+1
					);
			//print_r($data2);

			}
			else{
				$data2=array(
					'AcNo' => $ins3['id']+1
					);
			//print_r($data2);
			//return $data2;
			}
			//return $data2;
			
			$res = $data + $result + $data2 ;
			$this->load->view('Principal/Payment_Entry',$res);
		}
		else
		{
//If no session, redirect to login page
			redirect('login', 'refresh');
		}	

	}
	