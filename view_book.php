<?php 
	require_once "books_db.php"	;

	$query = "SELECT * FROM book";
	$result = mysqli_query($conn, $query);
	$num_row = mysqli_num_rows($result);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>View Book</title>
</head>
<body>
	 <table bgcolor="gray">
	 	<h1 align="center">Book Record Management</h1>
	</table>
		
	
	<table align="center" border="1px" bgcolor="gray" width="500px">
		<tr >
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php 
			for($i=0;$i<=$num_row;$i++){
				$row = mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row['BookID'] ?></td>
				<td><?php echo $row['Title'] ?></td>
				<td><?php echo $row['Price'] ?></td>
				<td><?php echo $row['Author'] ?></td>


			</tr>
			<?php  

			}



		 ?>


	</table>

</body>
</html>

