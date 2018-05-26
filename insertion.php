<?php 
	require_once "books_db.php";

	$book_name = $_POST['book_title'];
	$price = $_POST['price'];
	$author = $_POST['author_name'];
	


	$insert_into_table = "INSERT INTO book (Title,Price,Author) VALUES ('$book_name', $price, '$author')";

	 $status = mysqli_query($conn,$insert_into_table)

?>


<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>
	<h1 align="center">Book Record Management</h1>
	<p align="center"><?php if($status == 1) echo "file store successfully"; ?></p>

</body>
</html>



