<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class session_model extends CI_Model {

    function __construct() {
        parent::__construct();
     	$tableName = 'sessions';
     	$primaryKey = 'id'; 
		
		
    	// Connect to Mongo
//$this->connection = new Mongo('mongodb://aaqib:cacarot@ds051007.mongolab.com:51007/blog');

    	$this->connection = new Mongo('localhost:27017');

    	// Select a database
    	$this->db = $this->connection->blog;
		
    	// Select a collection
    	$this->posts = $this->db->$tableName;
    }
	
	
	
	/*----------------------add session data to database------------------------------------*/
	function save($member='') 
	{
		if ($member != '')
		{
			if (!isset($member['id']))
			{ // new record
				$this->posts->insert($member);
				return $member['_id'];
			} else
			{ // edit existing record
				$memberid = $member['id'];
				//unset($member['id']);
				$this->posts->update(array('_id' => new MongoId($memberid)), $member, array("multiple" => false));
				return $memberid;
			}
		}
    }

	
	/*
		
	function get_empty_session()
	{	
		

		$my = $this->posts->find(array( "request" => null ))->limit(5);												
		return $my;									
	
	}*/
	
	/*--------------------- get session data from database based on id-------------------------------*/

		
	function get_session($myses)
	{	
		
	
		$my = $this->posts->find(array('$or' => array(array("mentor" => $myses), array("mentee" => $myses))));												
		return $my;									
	
	}
	/*---------------------delete session-----------------------------*/

		
	function del_session($sid)
	{	
		$s = $this->posts->remove(array('_id' => new MongoId($sid)), array("justOne" => true));		
		return $s;
	}
	
	/*---------------------edit session-----------------------------*/

		
	function edit_session($id,$d)
	{	
		$qwet =	 $this->posts->update(array('_id' => new MongoId($id)),array('$set' => array('ses_description' => $d )));
		//return $s;
	}
	
	/*---------------------------------------load session-----------------------------------------*/
	
	function session_data($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->findOne(array('_id' => $id));												

		return $ses;									
		
	
	}	
	
	function session_data_mentor_names($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->find(array('_id' => $id));		
		$ses = $ses->getnext();
		
		
		$id1 = new mongoID($ses['mentor']);
//		echo "mentors id :".$id1."</br	>";
		
		$se = $this->db->users->find(array('_id' => $id1));												
		$se = $se->getnext();
//		echo "users : ".$se['email'];
		return $se;									
		
	
	}	
	
	function session_data_ment_ids($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->find(array('_id' => $id));		
		$ses = $ses->getnext();
		
		
		$id1 = new mongoID($ses['mentor']);
		$id2 = new mongoID($ses['mentee']);
//		echo "mentors id :".$id1."</br	>";
		
		$data['mentor']=$id1;
		$data['mentee']=$id2;
//		echo "users : ".$se['email'];
		return $data;									
		
	
	}	
	
		function session_data_mentee_names($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->find(array('_id' => $id));		
		$ses = $ses->getnext();
		
		$id1 = new mongoID($ses['mentee']);
//		echo "mentee id :".$id1."</br	>";
		
		$se = $this->db->users->find(array('_id' => $id1));												
		$se = $se->getnext();
//		echo "users : ".$se['email'];
		return $se;									
		
	
	}	
	function session_data_createdby_names($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->findOne(array('_id' => $id));		
				
		$id1 = new mongoID($ses['created_by']);
		$se = $this->db->users->findOne(array('_id' => $id1));												
		//$se = $se->getnext();

		return $se;									
		
	
	}	
		function session_data_request_names($id)
	{	
		
	
		$id = new mongoID($id);
		$ses = $this->posts->findOne(array('_id' => $id));		
				
		$id1 = new mongoID($ses['request']);
		$se = $this->db->users->findOne(array('_id' => $id1));												
		//$se = $se->getnext();

		return $se;									
		
	
	}	
	
	
/*--------------------------view others profile--------------------------------------*/
 	function showotherdata()
	{	

	$test=$this->input->post('uname');

		$name=$this->input->post('uname');
	//	$mycountry=$this->input->post('country');
		$city=$this->input->post('city');
		$myindustry=$this->input->post('industry');
		$myinterest=$this->input->post('interest');
		$myexp=$this->input->post('exp');
		$skills=$this->input->post('skills');
		
	
				
				$qry = array();
				if($name != NULL)
				
				$qry['name'] = $name;
				
				if($city != NULL)
				
				$qry['city'] = $city;
				
				if($myindustry != NULL) 
				
				$qry['myindustry'] = array( '$in' => $myindustry );
				
				if($myinterest!= NULL)
				
				$qry['myinterest'] = array( '$in' => $myinterest );
				
				if($myexp!= NULL)
				
				$qry['myexp'] = array( '$in' => $myexp );
				
				if($skills!=NULL)
				{
				$skills = explode(',', $skills);
				$qry['skills'] = array( '$in' => $skills );
				}


		$member =$this->db->users->find($qry) ;

		return $member;
		
	
			
	}
	
	/*--------------------------------------------------------*/
		function search_user_result($id)
	{	

	
		$mypro = $this->db->users->findOne(array('_id' =>  new MongoId($id)));											
		return $mypro;
	
	}
	/*--------------------------------------------------------*/
	
	function search_result()
	{	

	
		$otherspro = $this->posts->find();												
		return $otherspro;
	
	}
	/*--------------------------------------------------------*/
	
	function profile($id)
	{	
		
		$mypro = $this->db->users->findOne(array('_id' =>  new MongoId($id)));	
		$c =  $mypro['views'];	
		$c++;		
		$qwet =	 $this->db->users->update(array('_id' => new MongoId($id)),array('$set' => array('views' => $c )));
		
		return $mypro;	
	}
	
	function ses_add_requests($s1)
	{	
		

		$s = $this->posts->find(array('request' => $s1,'req_status' => '0'));		
		return $s;
	}
	
	
	/*-------------add from search resutls-------------------*/
	function ses_other($profile_id,$sesid)
	{	
		
		$sesid = new mongoID($sesid);
		
	 	$profile_id = new mongoID($profile_id);
		//var_dump($profile_id);
		$a = $this->posts->findOne(array('_id' => $sesid));
		
		if($a['req_status'] == NULL || $a['req_status'] == '2' )
		{
			$this->posts->update(array('_id' => $sesid),array('$set' => array("request" => $profile_id,"req_status" => "0")));	
			
			
			
			$mypro = $this->db->users->findOne(array('_id' =>  new MongoId($profile_id)));	
			
			echo $c =  $mypro['add_count'];	
		
			$c = (int)$c;
			$c++;	
			$qwet =	 $this->db->users->update(array('_id' => $mypro['_id']),array('$set' => array('add_count' => $c )));

	
		
		}
		else if($a['req_status'] == '0')
		{
			echo '<div class="nNote nFailure">
                <p>you aleady sent a request for this appointment, wait for a response</p>
            </div>';
		}
		else if($a['req_status'] == '1')
		{	
			echo '<div class="nNote nFailure">
                <p>more users cannot be added to the current session</p>
            </div>';
			//echo "<script>alert('more users cannot be added to the current session');</script>";
		}
		else if($a['req_status'] == '2')
		{	
		
			$this->posts->update(array('_id' => $sesid),array('$set' => array("request" => $profile_id,"req_status" => "0")));
		}
	
	
	}
	
	/*-------------accept from notif-------------------*/
	function ses_notif($profile_id,$sesid)
	{	
		
		$sesid = new mongoID($sesid);
		
		$profile_id = new mongoID($profile_id);
		$a = $this->posts->findOne(array('_id' => $sesid));
		
		
		if($profile_id == $a['request'])
		{
			//var_dump($a);
			if($a['mentor']==NULL)
			{
			$this->posts->update(array('_id' => $sesid),array('$set' => array("mentor" => $profile_id,"req_status" => "1")));
			}
			
			else if($a['mentee']==NULL)
			{
			$this->posts->update(array('_id' => $sesid),array('$set' => array("mentee" => $profile_id,"req_status" => "1")));
			}
		
		}	
	}
		/*-------------reject from notif-------------------*/
	function ses_notif_reject($profile_id,$sesid)
	{	
		
		$sesid = new mongoID($sesid);
		
		$profile_id = new mongoID($profile_id);
		$a = $this->posts->findOne(array('_id' => $sesid));
		
		
		if($profile_id == $a['request'])
		{
		
			$this->posts->update(array('_id' => $sesid),array('$set' => array("request" => NULL,"req_status" => "2")));
			
		
		}	
	}
	
		/*-------------cancel after sending a request-------------------*/
	function ses_cancel($profile_id,$sesid)
	{	
		
		$sesid = new mongoID($sesid);		
		$profile_id = new mongoID($profile_id);
		
		$a = $this->posts->findOne(array('_id' => $sesid));
			
	
		
			$this->posts->update(array('_id' => $sesid),array('$set' => array("request" => NULL,"req_status" => NULL)));
			

	
			if(	$a['request'] )
			{


				$other_id = $a['request'];
				$mypro = $this->db->users->findOne(array('_id' =>  new MongoId($other_id)));	
				$c =  (int)$mypro['add_count'];	
				$c = $c-1;	
				$this->db->users->update(array('_id' => new MongoId($other_id)),array('$set' => array('add_count' => $c )));

			}

	
	}
	
		/*-------------Editor save------------------*/
	function editorsave($sesid,$editorcontent)
	{	
		
		$sesid = new mongoID($sesid);		
		//$profile_id = new mongoID($profile_id);
		$a = $this->posts->findOne(array('_id' => $sesid));
		
	
		$this->posts->update(array('_id' => $sesid),array('$set' => array("editor" => $editorcontent)));

	}
	
	function editordisp($sesid)
	{	
		
		$sesid = new mongoID($sesid);		
		//$profile_id = new mongoID($profile_id);
		$a = $this->posts->findOne(array('_id' => $sesid));
		
		return $a;

	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
