<!DOCTYPE html>
<html>
<head>
	<title>Insert Book</title>
</head>
<body>
	<h1 align="center" style="background: gray; color: white">Book Record Management</h1>
	<p align="right"><b><a href="home.php">HOME</a></b></p>
	<form action="insertion.php" method="post">
		<table align="center">
			<tr>
				<td><th>Book Title</th></td>
				<td><input type="text" name="book_title" required ></td>
			</tr>
			<tr>
				<td><th>Price</th></td>
				<td><input type="text" name="price" required ></td>

			</tr>
			<tr>
				<td><th>Author Name</th></td>
				<td><input type="text" name="author_name" ></td>

			</tr>
			<tr>
				<th></th>
				<td colspan="2" align="center"><input type="submit" name="submit"></td>
				
			</tr>
		</table>
	</form>

</body>
</html>