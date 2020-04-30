<?php

//session_start();
     
  
$username = "root"; 
$password = ""; 
$database = "petshop"; 
$mysqli = new mysqli("localhost", $username, $password, $database);




if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
		.mysqli_connect_error());
		
}
	
        
else{
	echo "Error: ".$sql ."<br>".$conn->error;	
	   
}

$conn->close();
//session_destroy();


?>