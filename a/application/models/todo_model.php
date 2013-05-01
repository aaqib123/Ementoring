<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_Model extends CI_Model {

    function __construct() {
        parent::__construct();
     	$tableName = 'todo';
     	$primaryKey = 'id'; 
		
		
    	// Connect to Mongo
//$this->connection = new Mongo('mongodb://aaqib:cacarot@ds051007.mongolab.com:51007/blog');

    	$this->connection = new Mongo('localhost:27017');

    	// Select a database
    	$this->db = $this->connection->blog;
		
    	// Select a collection
    	$this->posts = $this->db->$tableName;
    }
  

	
	/** Insert new record */
	function save($uid,$todo)
	{
		
		if ($todo != '')
		{
				
				
				$r = $this->posts->findOne(array('uid' => $uid));												
				
				if( !$r )
				{
					
				$this->posts->insert(array("uid" => $uid, "count" => '0',"todo0" => $todo));
				}
				
				else
				{
					
					 $count = $r['count'];
					$count = $count + 1 ; 
					$todoc = "todo".$count;
					
					$this->posts->update( array('uid' => $uid),array('$set' => array( $todoc => $todo,"count" => $count)));
				}
			
			
		}
    }
		
		
//---------------------    forgot passwrd		----------------------------------------

	
	function todolist($eid)
	{			

		$ser = $this->posts->findOne(array('uid' => $eid));												
		return $ser;
		

	}	
	
//---------------------   delete todo		----------------------------------------
	
	
	function todostrike($myid,$a)
	{			
	$userid = $this->session->userdata('userid');
	$todos = $this->posts->findOne(array('uid' => $myid));	
	//echo $c = $todos['count'];

	$new =$todos[$a] ;
	$string = substr($new,0,8);
	
	/*var_dump($new);
	var_dump($string);*/
	
	if ( '<strike>' == $string )
	{
		echo "in";
		$this->posts->update(array("uid" => $userid ),array('$unset' => array( $a => NULL )));
		//$c = $c - 1;
		//$this->posts->update(array("uid" => $userid ),array('$set' => array( 'count' => $c)));
	}	
	else
	{
	echo "else";
	$new = "<strike>".$todos[$a]."</strike>" ;
	$this->posts->update(array("uid" => $userid ),array('$set' => array( $a => $new )));

	}

			
		
	}	
	
	
	

	
	
	
	
		
}		
?>