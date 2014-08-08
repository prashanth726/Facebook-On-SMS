<?php
//THANKS FOR DANNY HERRAN: http://www.dannyherran.com/2011/02/facebook-php-sdk-and-codeigniter-for-basic-user-authentication/
class Home extends CI_Controller
{
	//LOAD THE MODEL BEFORE ANYTHING (aka: _construct)! DON'T BE STUPID!
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Facebook_model');
		$this->load->library('form_validation');
		$this->load->library('table');
		
	}

	function index()
	{
		$fb_data = $this->session->userdata('fb_data');

		//OH NO! THE USER IS NOT LOGGED! Open the login form
		if((!$fb_data['uid']) || (!$fb_data['me']))
		{			
			$data = array(
				'fb_data' => $fb_data
				);
			$this->load->view('login', $data);
			//or you can redirect him, with the following command:
			//redirect('auth');
		}
		//Ok, he is logged... Show his data
		else
		{
			$access_token = $this->facebook->getAccessToken();
//echo $access_token;

//print_r($fb_data);
$uid= $fb_data['uid'];

$name= $fb_data['me']['name'];

$email= $fb_data['me']['email'];

$birthday= $fb_data['me']['birthday'];

$gender= $fb_data['me']['gender'];

$acc= $access_token;

$acode= $_REQUEST['code'];

$data['check'] =$this->Facebook_model->check($uid,$name,$email,$birthday,$gender,$acc,$acode);
$this->session->set_userdata('uidi', $uid);
				$this->session->set_userdata('namei', $name);
				$this->session->set_userdata('emaili', $email);
				
			$data = array(
				'fb_data' => $fb_data
				);
			$this->load->view('home', $data);
		}
	}
	
	function form(){
		$fb_data = $this->session->userdata('fb_data');

		//OH NO! THE USER IS NOT LOGGED! Open the login form
		if((!$fb_data['uid']) || (!$fb_data['me']))
		{			
			$data = array(
				'fb_data' => $fb_data
				);
			$this->load->view('login', $data);
			//or you can redirect him, with the following command:
			//redirect('auth');
		}
		else{
		$this->load->database();
		$this->form_validation->set_rules('username', 'Username', 'callback_rolekey_exists['.$this->input->post('provider').']');
//$this->form_validation->set_rules('username', 'Username', 'callback_rolekey_exists');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('home');
			$this->form_validation->set_message('username', 'Error Message');
		}
		}
		
		
		
	}
	public function rolekey_exists($username,$provider)
	
	
         {
			 $fb_data = $this->session->userdata('fb_data');

		//OH NO! THE USER IS NOT LOGGED! Open the login form
		if((!$fb_data['uid']) || (!$fb_data['me']))
		{			
			$data = array(
				'fb_data' => $fb_data
				);
			$this->load->view('login', $data);
			//or you can redirect him, with the following command:
			//redirect('auth');
		}
		else{
			 $uid =$provider;
			 
          $this->load->model('prashanth');
		  //$this->prashanth->role_exists($username);
		  $data['user']= $this->prashanth->role_exists($username,$provider,$uid);
		  $this->load->view('home', $data);
		 //$this->load->view('hauth/home',$name);
         }
		 }
	//Crap! The user have a lawyer! Goodbye! Destroy all saved data.
	function logout()
	{
		$this->Facebook_model->logout();
		$this->session->sess_destroy();
		redirect('');
	}
	
}