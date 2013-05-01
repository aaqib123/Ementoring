	
		
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_control extends CI_Controller {

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
		
				$this->load->library('../controllers/home');
				$this->home->index();
				
				
		}
		else
		{	

		$this->load->view('login');	
		}
	}
/*-----------------------------create session pop up -----------------------------*/
	public function createsession()
	{
		$data['main_content'] = 'session_create';
		$this->load->view('includes/template',$data);	
		//$this->load->view('session_create');	
	}

/*-----------------------------session data in database-----------------------------*/

	public function createsession1()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{	
			
			//$this->form_validation->set_rules('appointment_name', 'appointmaent name', 'required');	

			
				$user = $this->session->userdata('userid');

				$val1 = $this->input->post('who');
				//$val2 = $this->input->post('mentee');
				if($val1 == 1)	
				{
					$mentor = $user;
					$mentee = NULL;
				}
				else
				{
					$mentee = $user;
					$mentor = NULL;
				}										
										
						$today = date("F j, Y"); 
						$specs  = $this->input->post('specs');
						$message_data = array(
						
									'created_by' => $user,
									'appointment_name' => $this->input->post('appointment_name'),
									'mentor' => $mentor,
									'mentee' => $mentee,
									'create_date' => $today,
									'ses_description' => $this->input->post('a_desc'),
									'specs' => explode(",", $specs),
									'req_status' => null,
									'request' => null
									);
					
				$mem =	$this->session_model->save($message_data);
				$this->create_project_index($mem);
				
				$this->load->library('../controllers/home');
				$this->home->index();
				
			
	
		}
		else
		{	

		$this->load->view('login');	
		}
		
	}	
	
	//-----------------------------to edit session description ----------------------------
	public function sess_edit($sid)
	{
		$descr = $this->input->post('textarea');
		$a1 = $this->session_model->edit_session($sid,$descr);	
		$this->sess($sid);
	
		
	}
	

	
/*-----------------------------to handle session -----------------------------*/
	public function sess($id)
	{
		
		$a1 = $this->session_model->session_data($id); // gets all current session data

		$asdf['req'] = $a1['request'];
		$spec = $a1['specs'];
		$a2 = $this->session_model->session_data_mentor_names($id);
		$a3 = $this->session_model->session_data_mentee_names($id);
		$a4 = $this->session_model->session_data_createdby_names($id);
		$a5 = $this->session_model->session_data_request_names($id);

		
		//---------------------------------NOTIFICATIONS----------------------------------------------------------------
		
			$myses = $this->session->userdata('userid');
			$q = $this->session_model->ses_add_requests($myses);//checks and retrieves the userid existing in the column of "request"
			//	Requests		
			$b=0;
			foreach( $q as $qq )
			{
			
			$sescname[$b] = $qq['created_by'];
			$sesid = $qq['_id'];
			$x = $this->session_model->session_data_createdby_names($sesid);			
			$name =  $x['name'];			
			$link = "index.php/session_control/sess/".$sesid;
			$seslink = "<a href =".base_url($link).">";						
			$notif[$b] = "u have recieved a request to join ".$seslink."<B>".$qq['appointment_name']."</b></a> by ".$name;		
			$b++;
			}
			$data['notif'] = $notif;
			$data['sescname'] = $sescname;
			$data['n_count'] = $b;

			//-------for todo list--------------		-------		-------		-------		
			$todos = $this->Todo_Model->todolist($myses);
			$data['todos'] = $todos;
		
		//-----------------------------------------------------------------------------------------------------------
			if($a1['request'] != NULL )
			{
				 $one = $this->session_model->search_user_result($asdf);
				 $asdf['name'] = $one;
			}
			else
			{
				$two = "No request sent";
				 $asdf['name'] = $two;
			}


				
		$data['request'] =$asdf;	
		$data['spec'] = $spec; 
		$data['mentee'] = $a3;
		$data['mentor'] = $a2;
		$data['createdby'] = $a4;
		$data['sess'] = $a1; 
		$data['to'] = $a5; 
		$data['main_content'] = 'session_default';
		$this->load->view('includes/template',$data);
		
		
		
		
	}
//-----------------------------to delete session ----------------------------
	public function delete_sess($sid)
	{
		
		$a1 = $this->session_model->del_session($sid);
		$dir = 'uploads/'.$sid;
		
		if($a1 == TRUE)
		{
			
			
				if (is_dir($dir)) 
				{
					if (is_dir($dir))
					{
					 $objects = scandir($dir);
					 foreach ($objects as $object) 
					{
					   if ($object != "." && $object != "..") 
						{
						
							if (filetype($dir."/".$object) == "dir") 
							rrmdir($dir."/".$object); 
							else
							unlink($dir."/".$object);
						}
					}
					 reset($objects);
					 rmdir($dir);
					} 
				} 
				
				
			
		}
		else
		{
		echo "failure!! retry.";
		}
	
 	$this->index();
		
	}

/*----------------to display pages------------------*/
	public function editor($id)
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
			
	
		
		
		$a1 = $this->session_model->session_data($id);
		$n = ($a1['_id']);
		$data['sess'] = ($a1['_id']);

		$a2 = $this->session_model->editordisp($id);
		
		 $data['content'] = $a2['editor'];
			
		$data['main_content']='session_editor_page';
		$data['title']='editor';
		$this->load->view('includes/session/session_template',$data);
				
		}
		else
		{	

		$this->load->view('login');	
		}
	}
	
	public function editorsave($id)
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
		
		$editorcontent = $this->input->post('elm3');
		$a1 = $this->session_model->editorsave($id,$editorcontent);
		$this->editor($id);
	

		}
		else
		{	

		$this->load->view('login');	
		}

	}
	
	public function msg($ses_id)
	{	


		if ( $this->session->userdata('login_state') == TRUE   )
		{		
		
		$message= $this->messages_model->show_msg($ses_id);
		
		$i='a';
		foreach( $message as $doc )
		{	
		$data[$i] = $doc;
		$i++;	
		}
			
		$a = count($data);
		$data['count']= $a;
		$data['sess'] = $ses_id; 
		$data['letter']=$i;
		$data['main_content']='session_msg_page';
		$data['title']='messages';
		
		$this->load->view('includes/session/session_template',$data);
		
		}
		else
		{	

		$this->load->view('login');	
		}

		
	}
	public function search($sessid)
	{		
		if ( $this->session->userdata('login_state') == TRUE   )
		{		

		$a1 = $this->session_model->session_data($sessid);
		$n = ($a1['_id']);
		$data['sess'] = ($a1['_id']);	
		
		
		$data['sessid'] = $sessid; 
	
	
	
		$retured = $this->recommendation($sessid);
		
		$i='a';
		foreach ($retured as $doc)
		{
			$i++;
			$data[$i] = $doc;		
		}		

		$a = count($data);
		$data['count']= $a;

		$data['sesid'] = $sesid;				

		$data['main_content']='session_search_page';
		$data['title']='search';
		$this->load->view('includes/session/session_template',$data);
			
					
		}
		else
		{	

		$this->load->view('login');	
		}
		
		
	}
	
public function create_project_index($sessid)
	{

		require_once 'C:\wamp\www\a\Elastica\vendor\autoload.php';
	
		$elasticaClient = new \Elastica\Client();

		$elasticaIndex = $elasticaClient->getIndex('projects');
		
		$elasticaType = $elasticaIndex->getType('projects');
		echo $sessid;
		$a1 = $this->session_model->session_data($sessid); // gets all current session data
		echo $spec =  $a1['specs'];
		
		$index = array(
						'primary' => $sessid,
						'skills' => $a1['specs'],
						);
			
		$mentoringDocument = new Elastica\Document($create_project_index,$index);

		$elasticaType->addDocument($mentoringDocument);
	}

	
	
	
	
	public function recommendation($sesid)
	{
			$a1 = $this->session_model->session_data($sesid); // gets all current session data
			$spec =  $a1['specs'];
			$a = implode(' ',$spec);
			//var_dump($a);
		
		
		require_once 'C:\wamp\www\a\Elastica\vendor\autoload.php';

		$elasticaClient = new \Elastica\Client();

		$elasticaIndex = $elasticaClient->getIndex('mentoring');

		//$search_query = proj name here;
		 $search_query = $a;
		
		// Query text
		$value = $search_query;
		
		// Define a Query. We want a string query.
		$elasticaQueryString = new Elastica\Query\QueryString();
		$elasticaQueryString->setQuery((string)$value);

		// Create the actual search object with some data.
		$elasticaQuery = new Elastica\Query();
		$elasticaQuery->setQuery($elasticaQueryString);

		//Search on the index.
		$elasticaResultSet = $elasticaIndex->search($elasticaQuery);

		$resultData = array();
		
		foreach($elasticaResultSet as $result)
		{
			$resultData[] = $result->getData();
		}
		$search_results=array();
		
		foreach ($resultData as $result) 
		{		
			foreach ($result['primary'] as $id) 
			$search_results[]=$id;
		}
	
		$result_data = $this->Model_Users->get_data($search_results);
	
		return $result_data;
	/*	
		$i='a';
		foreach ($result_data as $doc)
		{
			$i++;
			$data[$i] = $doc;		
		}		

		$a = count($data);
		$data['count']= $a;

		$data['sesid'] = $sesid;				
		$this->load->view('includes/session/headerses');
		$this->load->view('includes/session/topbar3ses');
		$this->load->view('others_profile',$data);		
	*/	
	}


	
	public function run_search($sesid)
	{
		
		require_once 'C:\wamp\www\a\Elastica\vendor\autoload.php';

		$elasticaClient = new \Elastica\Client();

		$elasticaIndex = $elasticaClient->getIndex('mentoring');
				
		$search_query = $this->input->post('search');
			
		// Query text
		$value = $search_query;
		
		// Define a Query. We want a string query.
		$elasticaQueryString = new Elastica\Query\QueryString();
		$elasticaQueryString->setQuery((string)$value);

		// Create the actual search object with some data.
		$elasticaQuery = new Elastica\Query();
		$elasticaQuery->setQuery($elasticaQueryString);

		//Search on the index.
		$elasticaResultSet = $elasticaIndex->search($elasticaQuery);

		$resultData = array();
		
		foreach($elasticaResultSet as $result)
		{
			$resultData[] = $result->getData();
		}
		$search_results=array();
		
		foreach ($resultData as $result) 
		{		
			foreach ($result['primary'] as $id) 
		$search_results[]=$id;
		}
	
		$result_data = $this->Model_Users->get_data($search_results);
	
		$i='a';
		foreach ($result_data as $doc)
		{
			
			$i++;
			$data[$i] = $doc;
		
		}
		
		
		$a = count($data);
		$data['count']= $a;
		
		$data['sesid'] = $sesid;				
		$this->load->view('includes/session/headerses');
		$this->load->view('includes/session/topbar3ses');
		$this->load->view('others_profile',$data);		
		
	}

	
	public function upload($id)
	{		
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
		
		$a1 = $this->session_model->session_data($id);
		$n = ($a1['_id']);
		$data['sess'] = ($a1['_id']);	
		$data['error']= NULL;
		$data['main_content']='session_upload_page';
		$data['title']='Session_default';
		$map = directory_map('./uploads/'.$id);
		$data['map'] = $map;
		$this->load->view('includes/session/session_template',$data);
				
		}
		else
		{	

		$this->load->view('login');	
		}
		
	}
	
	public function upload_do($id)
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
				$path = "uploads/".$id;

				if(!is_dir($path)) //create the folder if it's not already exists
				{
				  mkdir($path,0755,TRUE);
				} 
					$a1 = $this->session_model->session_data($id);
					$n = ($a1['_id']);
					$data['sess'] = ($a1['_id']);
					$map = directory_map('./uploads/'.$id);
					$data['map'] = $map;
					
			$config['upload_path'] = './uploads/'.$id;
			$config['allowed_types'] = 'doc|docx|txt|ppt|jpg|gif|png';
			$config['max_size']	= '500';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
						
					
					
					$data['main_content']='session_upload_page';
					$data['title']='Session_default';
					$data['error']=$error;
					
					$this->load->view('includes/session/session_template',$data);
				
				}
				else
				{
					$error = array('error' => 'asdf');
					$data['data'] = array('upload_data' => $this->upload->data());
					$data['main_content']='session_upload_page';
					$data['title']='Session_default';
					$data['error']= $error;
					$this->load->view('includes/session/session_template',$data);
				}
			
		}
		else
		{	

			$this->load->view('login');	
		}
		
	}
	
	
	
	
	
	public function file_download($sess,$file)
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{
			$data = file_get_contents('uploads/'.$sess.'/'.$file); // Read the file's contents
			$name = $file;
			force_download($name, $data); 
	
		}
		else
		{	

			$this->load->view('login');	
		}
		
	}
	
	
	
	
		
	public function file_delete($sess,$file)
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{
			
			$path = 'uploads/'.$sess.'/'.$file;
 
			$result = unlink($path);
			 
			$this->upload($sess);
			
			
		}
		else
		{	

			$this->load->view('login');	
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		/*----------------------------------search results---------------*/
	public function searchresult($sesid)
	{
		
		$othersprofdata = $this->session_model->showotherdata(); 
		
		
		$i='a';
		foreach($othersprofdata as $doc )
		{
		$i++;
		$data[$i] = $doc;
		}
			$a = count($data);
			$data['count']= $a;
			
			$data['sesid'] = $sesid;
			//$data['one'] = $data['sesid'];
						
			$this->load->view('includes/session/headerses');	
			//$this->load->view('includes/sidebar2');
			$this->load->view('includes/session/topbar3ses');
			$this->load->view('others_profile',$data);	
	
	}
	

	
	
	
	public function viewprofiles($profile_id,$sesid)
	{

	if ( $this->session->userdata('login_state') == TRUE   )
		{		
		$profdata = $this->session_model->profile($profile_id);
 		
		
		$profdata['pid'] = $profile_id;
		$profdata['sid'] = $sesid;
		
		$data['main_content']='profile_view';
		$data['title']='My Profile';
		$data['prof'] = $profdata;
		
		$this->load->view('includes/myprofile_template',$data);
				
		}
		else
		{	

		$this->load->view('login');	
		}
	
	}
	
		
/*---------------------to add user to session from search results---------------------*/	
	public function adder($profile_id,$sesid)
	{
	if ( $this->session->userdata('login_state') == TRUE   )
		{		
	
		
		$profdata = $this->session_model->profile($profile_id);
 		
		
		$profdata['pid'] = $profile_id;
		$profdata['sid'] = $sesid;
		
		$mo =  $this->session_model->ses_other($profile_id,$sesid);
		$this->sess($sesid);
		
		
		
		}
		else
		{	

		$this->load->view('login');	
		}

	}
		
/*---------------------to add user to session from search results---------------------*/	
	public function user_ses_adder($sesid)
	{
	if ( $this->session->userdata('login_state') == TRUE   )
		{	 
			$form  =  $this->input->post('accept');	
			$form2 =  $this->input->post('reject');
			$form3 =  $this->input->post('cancel');		 
		
			if($form == 'accept')
			{
				$profile_id = $this->session->userdata('userid'); 
				$a = $this->session_model->ses_notif($profile_id,$sesid);
				$this->index();
			}
			else if($form2 == 'reject')
			{
				$profile_id = $this->session->userdata('userid'); 
				$a = $this->session_model->ses_notif_reject($profile_id,$sesid);
				$this->index();
			}
			else if($form3 == 'cancel')
			{
				$profile_id = $this->session->userdata('userid'); 
				$a = $this->session_model->ses_cancel($profile_id,$sesid);
				$this->index();
			}
		}
		else
		{	

		$this->load->view('login');	
		}

	}
	

	
}