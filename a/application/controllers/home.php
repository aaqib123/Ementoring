
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct()
	{
		parent::__construct();

		$this->load->model('session_model','',TRUE);
		$this->load->model('Model_Users','',TRUE);
		$this->load->model('Todo_Model','',TRUE);

	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
		
			
			$userdataall = $this->Model_Users->get();
			$forfirstuser = $userdataall['skills'];
			$myses = $this->session->userdata('userid');
			
			
//-------for notifications--------------		-------		-------		-------		
			$q = $this->session_model->ses_add_requests($myses);
			$b=0;
			foreach( $q as $qq )
			{
				
				$sesid = $qq['_id'];
				$sescname[$b] = $qq['created_by'];
				$a2 = $this->session_model->session_data_createdby_names($sesid);
				$name =  $a2['name'];
				
				$link = "index.php/session_control/sess/".$sesid;
				 $seslink = "<a href =".base_url($link).">";			
				$notif[$b] = "You have recieved a request to join ".$seslink."<B>".$qq['appointment_name']."</b></a> by ".$name;
				$b++;
			}
	

//-------for todo list--------------		-------		-------		-------		
			$todos = $this->Todo_Model->todolist($myses);
		
		
//------------	-------		-------		-------		-------		-------				


	//	$cid = $this->session_model->session_data($myses);
		$sessions = $this->session_model->get_session($myses); 
		
		
			$i='a';
			
				foreach( $sessions as $doc )
				{
				//	var_dump($doc);
				
				$data[$i] = $doc;
				
				$i++;
				
				}
//------------	-------		for empty sessions-------		-------		-------		-------		
/*
$sessions2 = $this->session_model->get_empty_session(); 
				$v='aa';
				foreach( $sessions2 as $ille)		
				{
			//	var_dump($ille);
				$empt[$v]= $ille;	
				$v++;
				}
	*/
				
//------------	-------		-------		-------		-------		-------					
			$a = count($data);
			$data['all'] = $userdataall;
			$data['n_count'] = $b;
			$data['notif'] = $notif;
			$data['count']= $a;
			$data['sescname']= $sescname;
			$data['main_content'] = 'home';
			$data['todos'] = $todos;
			$data['empt'] = $empt;
			$data['forfirstuser'] = $forfirstuser;
			$this->load->view('includes/template',$data);		
			
		}
		else
		{	

		$this->load->view('login');	
		}
	}
		
	/*-----------------------------------------------------------------------------------------------------------------------------------*/


	/*-----------------------------create todo pop up -----------------------------*/
	public function todo()
	{
		
		$this->load->view('todo');
		
		
		
	}
	
	
	
/*-----------------------------todo data in database-----------------------------*/

		public function todomanager()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{	
			
			$this->form_validation->set_rules('todo', 'field', 'required');	

			
			if ($this->form_validation->run() == TRUE)
			{
				$uid = $this->session->userdata('userid');
				$todo = $this->input->post('todo');
				$ins = $this->Todo_Model->save($uid,$todo);
				$this->index();
			}
			else
			{	

				$this->index();
			}
	
		}
		else
		{	

		$this->load->view('login');	
		}
		
	}	
	
	
	public function todocancel($a)
	{
		$myid = $this->session->userdata('userid');
		$this->Todo_Model->todostrike($myid,$a);
		redirect('http://localhost/a/index.php/home');
	}
	
	/*
	public function online()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{
		
		$userid = $this->session->userdata('userid');
		$this->Model_Users->onlinepeoples($myid,$a);
	
	}
	
	}
	*/
	
	
		
	
	
	
	
	
	
	
}
?>
