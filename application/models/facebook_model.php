<?php
//THANKS FOR DANNY HERRAN: http://www.dannyherran.com/2011/02/facebook-php-sdk-and-codeigniter-for-basic-user-authentication/
class Facebook_model extends CI_Model
{
	function __construct()
	{
		//Preparing land...
		$this->config->load('facebook');	//Edit this config file to change the appId, secret ID, API QUery and permissions
		$config = array(
			'appId' => $this->config->item('fbAppId'),
			'secret' => $this->config->item('fbSecret')
		);
		$this->load->library('Facebook',$config);
	
		//Find the user...
		$user_id = $this->facebook->getUser();
		
		$query = null;
		if($user_id)
		{
			try
			{
				$query = $this->facebook->api($this->config->item('fbApiQuery'));
			}
			catch(FacebookApiException $e)
			{
				echo "Somthing Went Wrong Please Contact admin @ www.google.com/+PrashanthReddy";
				error_log($e);
				$user_id = null;
			}
		}
		//OOH! You find him!? Now interrogate him and get some data
		try
			{
		$fb_data = array(
			'me' => $query,
			'uid' => $user_id,
			
			'loginUrl' => $this->facebook->getLoginUrl(
				array(
					'scope' => $this->config->item('fbPermission'),
					'redirect_uri' => $this->config->item('fbPostLoginRedirect') //After login, where you want to send your buddy? My case: homepage
					)
				),
			'logoutUrl' => $this->facebook->getLogoutUrl()
			);

		//Save the data in session... for another generations
		$this->session->set_userdata('fb_data', $fb_data);
	}

			catch(FacebookApiException $e)
			{
				echo "Somthing Went Wrong Please Contact admin @ www.google.com/+PrashanthReddy";
				error_log($e);
				$user_id = null;
			}
		}

public function check($arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7)
	{   
		$this->load->database(); 
		$this->load->helper('string');
	    
	    
		$this -> db -> select('uid');
		$this -> db -> from('');
		$this -> db -> where('uid = ' . "'" . $arg1 . "'"); 
		
		$this -> db -> limit(1);

		$query = $this -> db -> get();
////echo "after".$query -> num_rows();
		
////echo "<hr></hr>";
		if($query -> num_rows() == 0)
		{
			
			$date= date("Y-m-d h:i:s");
$date = date('Y-m-d h:i:s', strtotime(str_replace('/', '-', $date)));

			$this->db->query("");
			////echo "<hr></hr>";
			
//echo"effected". $this->db->affected_rows(); 


//if($this->db->affected_rows()>0){
//$this -> db -> select('id');
//		$this -> db -> from('okgoogle');
//		$this -> db -> where('uid = ' . "'" . $arg1 . "'"); 
//		
//		$this -> db -> limit(1);
//
//		$query = $this -> db -> get();
//////echo "afteriiiii".$query -> num_rows();
//foreach ($query->result() as $row)
//{
//	////echo "<hr></hr>hhhyhyhy";
//    ////echo $row->id;
//	$PR=random_string('nozero', 5);
//	$code=$row->id.$PR;
//	//echo "<div class='alert'>";
//	//echo $code;
//	//echo "</div>";
//	//echo "<hr></hr>";
//	$data = array(
//               'code' => $code
//              
//            );
//
//$this->db->where('uid', $arg1);
//$this->db->update('okgoogle', $data);


///echo "<hr></hr>Updated code".$this->db->affected_rows();

$this->load->library('email');

$this->email->from('prashanth726@gmail.com', 'PR APPS');
$this->email->to($arg3); 


$this->email->subject('SuccessFully Done with Registering your account');
$this->email->message('Hai'. $arg2 .' "".Youre Done !! NOW Enjoy Facebook Without Internet On Airtel Send #FB to 55444 - Team PR APPS');	


$this->email->send();

//echo $this->email->print_debugger();



		

		}
		else{
			$date= date("Y-m-d h:i:s");
$date = date('Y-m-d h:i:s', strtotime(str_replace('/', '-', $date)));
			$data = array(
               
               '' => $arg1,
               '' => $arg2,
			   '' => $arg3,
			   '' => $arg4,
			   '' => $arg5,
               '' => $arg6,
               '' => $arg7,
			   '' => $date
			    );

$this->db->where('', $arg1);
$this->db->update('', $data);



////echo "<hr></hr>Updated".$this->db->affected_rows();
			////echo "<hr></hr>";
			////echo "foundddd";
			////echo "<hr></hr>";
		}
		 
			
		
		
//$query = $this->db->query("INSERT INTO `users`(`provider_uid`,`provider`) VALUES ($arg1,'$arg2')");


//foreach ($query->result() as $row)
//{
//     echo $row->id;
//     echo $row->first_name;
//     echo $row->last_name;
//}

//echo 'Total Results: ' . $query->num_rows();  
		 
	}


	//Crap! The user have a lawyer! Goodbye! Destroy all saved data.
	function logout()
	{
		$this->facebook->destroySession();
	}
	
}