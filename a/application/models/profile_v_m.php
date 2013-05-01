<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_v_m extends CI_Model {

    function __construct() 
	{

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
 
/*--------------------------view my profile----------------------------------------*/
	function showdata()
	{	
		
		$mypro = $this->session->userdata('userid');
		$mypro = $this->posts->find(array('_id' => $mypro));												
		$mypro = $mypro->getNext();
		return $mypro;									

	}
 
}