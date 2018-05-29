<?php 
	error_reporting(0);
	require_once "books_db.php";
	$selection_list = $_POST['check_list'];
	$no_of_record = count($_POST['check_list']);
	

	if(isset($_POST['submit'])){
		if(!empty($selection_list)){
			foreach($selection_list as $query) {
				$delete_query = "DELETE FROM book WHERE  BookID = $query ";
				$result = mysqli_query($conn, $delete_query);
			}

		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>deleted data</title>
</head>
<body>
	<h1 align="center" style="background: gray; color: white">Book Record Management</h1>
	<p align="right"><b><a href="home.php">HOME</a></b></p>
	<p align="center"><?php 
			if($result == 1){
			 	echo " <b>$no_of_record Record deleted successfully<b>";
			 }else
			 	echo "<b>Please Select Atleast One Option.</b>";
			 ?>
			 
	</p>
	<p align="center" >Do you want to delete more data <a href="deleteForm.php">Click Here</a></p>

</body>
</html>
