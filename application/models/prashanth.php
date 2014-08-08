<?php
class prashanth extends CI_Model
{
	
	function role_exists($arg1,$arg2)
{
	//$myVar = $this->session->flashdata('item');
	//echo "my"."$arg3";
	
	
	
		
	$this->load->database();
	$this -> db -> select('');
		$this -> db -> from('');
		$this -> db -> where(' = ' . "'" . $arg1 . "'"); 
		
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		 $row = $query->num_rows();
	
         if ($row > 0){
	 
          $data = $query->result_array();
           
		   
		   $data = array(
               'code' => $arg1,
			   'mhash' => $data[0][''],
			   'verified' => "1"
			   
              
            );

$this->db->where('', $arg2);
$this->db->update('', $data);
$data = $this->db->affected_rows();
if($data >=1)
{
	 $data = "Successfully Verified";
           return $data;
	
}
else{
	$data = "Somthing Went Wrong";
           return $data;
}
//return $data;
           }
    else{
		
     $data = "Please Verify Your Code";
           return $data;
		
    

}}
}


?>