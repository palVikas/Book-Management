<?php 

	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "brm_db";

	$conn = mysqli_connect($host,$user,$password,$db_name);
	 if(!$conn){
	 	echo "connection error";
	 }else{
	 	echo "connect successfully";
	}


	 $table = "book";
	 $create_table = "CREATE TABLE book(
	 					BookID int(5) PRIMARY KEY AUTO_INCREMENT,
						Title varchar(255) NOT NULL,
						Price Float(7,2) NOT NULL,
						Author varchar(255)
						)";

	 mysqli_query($conn,$create_table);
	 	
	 
?>