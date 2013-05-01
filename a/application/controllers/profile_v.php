<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_v extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('profile_v_m','',TRUE);
		
		
		
		
		
	}
	

	public function index()
	{
		if ( $this->session->userdata('login_state') == TRUE   )
		{		
		$profdata = $this->profile_v_m->showdata();
 		
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
	
	
	
	
	
	
	



	
}