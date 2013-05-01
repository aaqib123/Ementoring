<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class update_profile extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('session_model','',TRUE);
		$this->load->model('messages_model','',TRUE);
				$this->load->model('Todo_Model','',TRUE);


	}


	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
			$redi = $this->Model_Users->redisplay();
			
		//------------------------------------added for notif-------------------------------------------------------------------------
		
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
				$notif[$b] = "u have recieved a request to join ".$seslink."<B>".$qq['appointment_name']."</b></a> by ".$name;
				$b++;
			}
//-------for todo list--------------		-------		-------		-------		
			$todos = $this->Todo_Model->todolist($myses);

			$data['all'] = $userdataall;
			$data['n_count'] = $b;
			$data['notif'] = $notif;
			$data['todos'] = $todos;
			$data['sescname']= $sescname;	
			$data['redi'] = $redi;
			$data['forfirstuser'] = $forfirstuser;
			$data['main_content']='update_profile';
			$data['title']='update profile';
			$this->load->view('includes/updateprofile_template',$data);
					
		}
		else
		{	

			$this->load->view('login');	
		}
	}
	
public function create_index($user_id)
	{

		require_once 'C:\wamp\www\a\Elastica\vendor\autoload.php';
	
		$elasticaClient = new \Elastica\Client();

		$elasticaIndex = $elasticaClient->getIndex('mentoring');
		
		$elasticaType = $elasticaIndex->getType('mentoring');
		
		$data = $this->Model_Users->get_data_from_email($user_id);
	
		$index = array(
						'primary' => $user_id,
						'name' => $data['name'],
						'email' => $data['email'],
						'city' => $data['city'],
						'date_of_birth' => $data['dob'],
						'country' => $data['mycountry'],
						'experience' => $data['myexp'],
						'industry' => $data['myindustry'],
						'interest' => $data['myinterest'],
						'skills' => $data['skills'],
						);
			
		$mentoringDocument = new Elastica\Document($user_id,$index);

		$elasticaType->addDocument($mentoringDocument);
	}
	
	/*-----------------------------  update data        -------------------------*/
	public function updateinfo()
	{			
		if ($this->input->post('submit'))
		{
			$this->Model_Users->reinsert();
			$userid = $this->session->userdata('userid');
			$this->create_index($userid);
			$this->index();
		}
		
	}
	
	
	public function picture()
	{	

				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$new_file_name = $this->session->userdata('userid');
				$config['file_name'] = $new_file_name.'.jpg';
				$config['max_size'] = '1000000000000';
				$config['overwrite'] = TRUE;

				// You can give video formats if you want to upload any video file.

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('image_file'))
				{
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
					// uploading failed. $error will holds the errors.
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());

					
					$file_name=$this->upload->file_name;
					
					//redirect($this->uri->uri_string());
					
					$this->load->library('../controllers/home');
					$this->home->index();
				
				
				}
				
	}
}

	
	
	

