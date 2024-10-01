<?php
class dblms {
	private $lms_hostname;
	private $lms_username;
	private $lms_password;
	private $lms_database; 
	private $connection;

	
//------------ For Assign Valies in Connection Parameters --------------------------------
public function dblms() {
	$this->lms_hostname = LMS_HOSTNAME;
	$this->lms_username = LMS_USERNAME;
	$this->lms_password = LMS_USERPASS;
	$this->lms_database = LMS_NAME;
} // end of function


//------------ For Open Connection ---
public function open_connectionlms() {
//--------------------------------------------------------------------------------------------
$this->dblms();
//--------------------------------------------------------------------------------------------
try	{  
	   // Create connection
		$this->connection = new mysqli($this->lms_hostname,  $this->lms_username, $this->lms_password, $this->lms_database);
		// Check connection
		if ($this->connection->connect_error) { 	die("Connection failed: " . $this->connection->connect_error); }
}
	
	catch(exception $e)	{ die($e); }

} // end of function
 
//------------ Get Latest Inserted id ---
public function lastestid() { return $this->connection->insert_id; }



//------------ For Executing Query ---
public function querylms($sqllms) {
	$this->open_connectionlms();

	try	{
		 return $this->connection->query($sqllms);
		$this->connection->close();  }

	catch(exception $e)	{ 	 die($e); } 
	
} // end of function

 
} // end of class



?>