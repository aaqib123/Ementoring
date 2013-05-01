<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class messages_model extends CI_Model {

    function __construct() {
        parent::__construct();
     	$tableName = 'message';
     	$primaryKey = 'id';

    	$this->connection = new Mongo('localhost:27017');

    	// Select a database
    	$this->db = $this->connection->blog;
		
    	// Select a collection
    	$this->posts = $this->db->$tableName;
    }
	
	/** Insert new record */
	function save($member) {

				$this->posts->insert($member);
			
	
		
    }
	
	function show_msg($ses_id)
	{							
		
		
		$redi = $this->posts->find(array('session_id' => $ses_id));												
		//$redi = $redi->getNext();
		return $redi;									
			

		
	
	}
	
}