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
	 	<h1 align="center" style="background: gray; color: white">Book Record Management</h1>
	 	<p align="right"><b><a href="home.php">HOME</a></b></p>
	</table>
		
	
	<table align="center" border="5px" bgcolor="pink" width="500px">
		<tr bgcolor="gray">
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php 
			for($i=0;$i<$num_row;$i++){
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

