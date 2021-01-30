<!DOCTYPE html>
<html>
<head>
	<title>Personal</title>
	<link rel="stylesheet" href="css/personal.css">
</head>
<body>
	<form action="post.php" method="post" class="form">
		<table>
			<tr>
				<td><label for="title">Title:</label></td>
				<td><input type="text" name="title" class="domain"></td>
			</tr>
			<tr>
				<td><label for="deseription">Deseription:</label></td>
				<td><textarea type="text" name="deseription" class=""></textarea>
			</tr>
			<tr>
				<td><label for="category">Category:</label></td>
				<td>
					<input type="text" name="category" class="domain">
				</td>
			</tr>
			<tr>
				<td><label for="date">Date:</label></td>
				<td><input type="date" name="date_name" class="domain"></td>
			</tr>
			<tr>
				<td><label for="name">Image:</label></td>
				<td>
					<form action="upload-form.php" method="post" enctype="multipart/form-data">
						<input type="file" name="photo" id="fileSelect">
					</form>
				</td>
			</tr>
			<tr>
				<td class="submit"><input type="submit" name="submit" value="post" class="sub"></td>
			</tr>
		</table>
	</form>
</body>
</html>