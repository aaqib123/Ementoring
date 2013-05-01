<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function loada()
{
$userid = $CI->session->userdata('userid');
redirect('session_control/msg/'); 
/*

 $CI =& get_instance();
 
 

//$CI->load->library('../controllers/session_control');

  $CI->msg($userid);
 

	*/
  
  
}

?>