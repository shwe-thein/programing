<!DOCTYPE html>
<html>
<head>
	<title>Personal</title>
	<link rel="stylesheet" href="css/personal.css">
</head>
<body>
	<form action="personal.php" method="post" class="form">
		<table>
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input type="text" name="name" class="domain"></td>
			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="email" name="email" class="domain"></td>
			</tr>
			<tr>
				<td><label for="gender">Gender:</label></td>
				<td>
					<table>
						<tr>
							<td><label for="male">Male</label><input type="radio" name="gender" value="M"></td>
							<td><label for="female">Female</label><input type="radio" name="gender" value="F"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="barth_date">Birth Date:</label></td>
				<td><input type="date" name="barth_date" class="domain"></td>
			</tr>
			<tr>
				<td><label for="adress">Adress:</label></td>
				<td><input type="text" name="adress" class="domain"></td>
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
				<td class="submit"><input type="submit" name="submit" value="Submit" class="sub"></td>
			</tr>
		</table>
	</form>
</body>
</html>