//---------------------------------NOTIFICATIONS----------------------------------------------------------------
	<?php	
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

			//-------for todo list--------------		-------		-------		-------		
			$todos = $this->Todo_Model->todolist($myses);
			$data['todos'] = $todos;
?>		
		//-----------------------------------------------------------------------------------------------------------