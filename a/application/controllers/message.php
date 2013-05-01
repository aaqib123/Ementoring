<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('messages_model','',TRUE);
		$this->load->model('session_model','',TRUE);

	}
	
	public function index()
	{		
		$this->load->view('message');
		
		
	}

	function validation($sess_id)
	{
			
	
		$a2 = $this->session_model->session_data_ment_ids($sess_id);
			
		$mentor=$a2['mentor'];
		$mentee=$a2['mentee'];
		
		$fromid=$this->session->userdata('userid');
		
		if($fromid==$mentor)
			{
				$toid=$mentee;
			}
		else
			{
				$toid=$mentor;
			}
				
				$message_data = array(
							
								'to' => $toid,
								'from'=>$this->session->userdata('userid'),
								'session_id' => $sess_id,
								'message' => $this->input->post('message')
								);
						
				$this->messages_model->save($message_data); // Insert the member
				
				$this->load->library('../controllers/session_control');
				$this->session_control->msg($sess_id);
	}
		
		
			
	
}
