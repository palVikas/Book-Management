<?php 
	require_once "books_db.php"	;

	$query = "SELECT * FROM book";
	$result = mysqli_query($conn, $query);
	$num_row = mysqli_num_rows($result);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete Books</title>
</head>
<body>
	<h1 align="center" style="background: gray; color: white">Book Record Management</h1>
	<p align="right"><b><a href="home.php">HOME</a></b></p>
	<form action="deletion.php" method="post">
		<table align="center" border="4px" bgcolor="pink" width="500px">
		<tr bgcolor="gray">
			<th>Select to delete</th>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Price</th>
			<th>Author</th>
			
		</tr>
		<?php 
			for($i=0; $i<$num_row; $i++){
				$row = mysqli_fetch_array($result);
			?>
			<tr>
				<td><input type="checkbox" name="check_list[]" value=<?php echo $row['BookID'] ?> ></td>
				<td><?php echo $row['BookID'] ?></td>
				<td><?php echo $row['Title'] ?></td>
				<td><?php echo $row['Price'] ?></td>
				<td><?php echo $row['Author'] ?></td>
			</tr>
			<?php  } ?>
			<tr><td colspan="5"><input type="submit" name ="submit" value="delete"></td></tr>
			

	</table>

		
	</form>
	

</body>
</html>

