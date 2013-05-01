<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Model_Users','',TRUE);


		

	}
	
	public function index()
	{
		if ( $this->session->userdata('login_state') == FALSE   )
		{	
	
		$this->load->view('login');
		
		}
		else
		{
		redirect( 'http://localhost/a/index.php/home' );
		}
	}
/*------------------------------------------------------- this is registration	---------------------------*/
 	function register()
	{
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('emailr', 'email', 'required|valid_email');	
				$this->form_validation->set_rules('passwordr', 'Password', 'required|matches[password2r]');		
				$this->form_validation->set_rules('password2r', 'Password Confirmation', 'required');	
				
		$data = array();
		$data['inserted'] = FALSE;
		
		// If form submitted
		if($this->input->post('signup'))
		{
			$e = $this->input->post('emailr');
			$n = $this->input->post('name');
			$p = $this->input->post('passwordr');
			$exist = $this->Model_Users->check_user($e);
			
			if(!$exist)
			{
				if ($this->form_validation->run() == TRUE)
				{
				$today = date("Y-m-d H:i:s"); 
					// add new member into array
					$member = array(
								
									'email' => $this->input->post('emailr'),
									'password' => $this->input->post('passwordr'),
									'name' => $n,
									'views' => '0',
									'join_date' => $today
									);
					$user_id=$this->Model_Users->save($member); // Insert the member
					$this->create_index($user_id);
					$data['inserted'] = TRUE;
					$data['exists'] = '<div class="nNote nSuccess"><p>Sucess!!you are now registered</p></div>';
					$this->load->view('login',$data); 
					

				}
				else
				{
					
					$this->load->view('login'); 
				}
			}
			else
			{
					$data['exists'] =  '<div class="nNote nFailure"><p>This id already exists.</p></div>';
					$this->load->view('login',$data); 
				}
		
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
	
		
/*------------------------------------------------------- this is login	---------------------------*/

	function login_validation()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{							
			$this->index();
		}
		else
		{
			$member = $this->Model_Users->check_user_data();
			
			
			$userid=$member['_id']; // to add the id into the session, andhe neeche wali line me dekh
			$user_name = $member['name'];
			if ($member)
				{    //idar be ullu
					$newdata = array(
						   'userid' => $userid, 
						   'login_state' => TRUE,
						   'user_name' => $user_name
							);
							
					$this->session->set_userdata($newdata);		
					$this->Model_Users->loginhogaya($userid);

					redirect( 'http://localhost/a/index.php/home' );
					//$a=$this->session->all_userdata();
					//var_dump($a);
				
				}
				else
				{
					
					$data['exists'] =  '<div class="nNote nFailure"><p>This id doesnt seem to exist.</p></div>';
					$this->load->view('login',$data); 
				}
		
		}
	}
/*------------------------------------------------------- this is logout	---------------------------*/

	 public function logout()
		 {
	
		  $userid = $this->session->userdata('userid'); 
		  
		  $hua = $this->Model_Users->logouthogaya($userid);
		  if($hua)
		  {
		  
			$this->session->sess_destroy();
			$this->load->view('login');  
		  }
		  	  
		 }
		 
/*------------------------------------------------------- this is forgot password	---------------------------*/
	public function forgot()
	{
		if($this->input->post('submit'))
		{
			$email = $this->input->post('email');
			$a =$this->Model_Users->forgotpass($email);	
				
				if($a!=NULL)
				{

					$email = $a['email'];
					$pass = $a['password'];

						$to       = $email;
						$subject  = 'Testing sendmail.exe';
						$message  = 'your password is '.$pass;
						$headers  = 'From: sender@gmail.com' . "\r\n" .
									'Reply-To: sender@gmail.com' . "\r\n" .
									'MIME-Version: 1.0' . "\r\n" .
									'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
									'X-Mailer: PHP/' . phpversion();
						if(mail($to, $subject, $message, $headers))
						{
							echo "<script> alert('email sent')</script>";
							$this->index();			
						}
						else
						{	
						echo "<script> alert('email sending failed')</script>";
						$this->index();			
						}	
				}
				else
				{
				echo "<script> alert('user doesnt exist in database')</script>"; 
				$this->index();			
				}
		}
		else
		{
		$this->load->view('fyp');
		}
		

	} 

		 
		 
		 
		 
}
