<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Users extends CI_Model {

    function __construct() {
        parent::__construct();
     	$tableName = 'users';
     	$primaryKey = 'id'; 
		
		
    	// Connect to Mongo
//$this->connection = new Mongo('mongodb://aaqib:cacarot@ds051007.mongolab.com:51007/blog');

    	$this->connection = new Mongo('localhost:27017');

    	// Select a database
    	$this->db = $this->connection->blog;
		
    	// Select a collection
    	$this->posts = $this->db->$tableName;
    }
  
function all()
{
	$r= $this->posts->find()->limit(10)->sort(array("join_date" => -1));										
	return $r;
}

	
	/** Insert new record */
	function save($member='') {
		if ($member != ''){
			if (!isset($member['id'])){ // new record
				$this->posts->insert($member);
				return $member['_id'];
			} else { // edit existing record
				$memberid = $member['id'];
				//unset($member['id']);
				$this->posts->update(array('_id' => new MongoId($memberid)), $member, array("multiple" => false));
				return $memberid;
			}
		}
    }
	
	/* check if email already exists */
	function check_user($email)
	{
		$query = array( "email" => $email );
		$member = $this->posts->findOne( $query );
		return $member;
		
	
	}
	/* check if user exists in database */
	function check_user_data()
	{
		$query = array( "email" => $this->input->post('email'), "password" => $this->input->post('password') );
		$member = $this->posts->findOne( $query );

		return $member;

	}
	
	/* update user documents */
	function reinsert()
	{			
		/*$r =  $this->input->post('timezone');				
		var_dump($r);*/	
		
		$a=$this->session->userdata('userid');
		$skills  = $this->input->post('skills');
		$member = $this->posts->update( 
												array('_id' => $a),
												
												array('$set' => array(			
										
										'name' => $this->input->post('uname'),												
										'password' => $this->input->post('upw'),
										'email' => $this->input->post('email'),
										'mycountry' => $this->input->post('country'),
										'city' => $this->input->post('city'),
										'skills' => explode(",", $skills),
										'description' => $this->input->post('desc'),
										'myindustry' => $this->input->post('industry'),
										'myinterest' => $this->input->post('interest'),
										'myexp' => $this->input->post('exp')
								
								
										
												) ));
			

		
	
	}
	
	
	/*---------------------     get user data --------------------------------------*/
	function get()
	{							
		$a=$this->session->userdata('userid');
		
		$r= $this->posts->findOne(array('_id' => $a));												
		return $r;
	
	}

	/*---------------------     to get data to redisplay data in the form----------------------------------------*/
	function redisplay()
	{							
		$a=$this->session->userdata('userid');
		
		$redi = $this->posts->find(array('_id' => $a));												
		$redi = $redi->getNext();
		return $redi;									
			

		
	
	}
		
	/*---------------------    forgot passwrd		----------------------------------------*/

	
	function forgotpass($eid)
	{			

		$ser = $this->posts->findOne(array('email' => $eid));												
		return $ser;
		

	}
	
	function loginhogaya($userid)
	{			

										
		$member = $this->posts->update( array('_id' => $userid),array('$set' => array('state' => "1") ));
		


	}	

	function get_data_from_email()
	{
		$query = array( "email" => $this->input->post('email'));
		$data = $this->posts->find( $query );
		$data = $data->getNext();
		return $data;
	}
	
	function logouthogaya($userid)
	{	
	
										
		$member = $this->posts->update( array('_id' => $userid),array('$set' => array('state' => "0") ));
		return $member;
	
	
	}
	
	
	 function get_data($search_results)
	{
		
		$result_data=array();
		$i=0;
		foreach ($search_results as $id)
		{
			
			$id = new mongoID($id);
			$query = array( "_id" => $id);		
			$result_data[$i] = $this->posts->find( $query );	
			$result_data[$i] = $result_data[$i]->getnext();
			$i++;
		}
		
		return $result_data;
		/*foreach ($result_data as $data)
		{
			echo $data['name'];
			echo "<br>";
			echo $data['_id'];
			echo "<br>";
		}*/
	}
}



?>