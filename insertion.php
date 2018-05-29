<?php 
	require_once "books_db.php";

	$book_name = $_POST['book_title'];
	$price = $_POST['price'];
	$author = $_POST['author_name'];
	$insert_into_table = "INSERT INTO book (Title,Price,Author) VALUES ('$book_name', $price, '$author')";
	$status = mysqli_query($conn,$insert_into_table);


?>


<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>
	<h1 align="center" style="background: gray; color: white">Book Record Management</h1>
	<p align="right"><b><a href="home.php">HOME</a></b></p>
	<p align="center"><?php 
			if($status == 1){
			 	echo "data store successfully";
			 }else
			 	echo "data store unsuccessfull back to"; 
			 ?>
			 
	</p>
	<p align="center" >Do you want to insert more data <a href="insertForm.php">Click Here</a></p>

</body>
</html>



