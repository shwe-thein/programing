<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		body{
			font-size: 13px;
		}
	</style>
  </head>
  <body>
  	<div class="container-fluid" style="margin-top: 50px;margin-left: 500px;">
	<div class="row">
		<div class="col-md-5">
			<div class="jumbotron">
				<h3 class="text-center">BOOK ADD FORM</h3>
				<div class="form">

				  <form action="book.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Book Title:</label>
								<input type="text" name="book_title" class="form-control">
							</div>
							<div class="form-group">
								<label for="author">Author:</label>
								<input type="tex" name="author" class="form-control">
							</div>
							<div class="form-group">
								<label for="prize">Prize:</label>
								<input type="tex" name="prize" class="form-control">
							</div>
							<div class="form-group">
								<label for="category">Category:</label>
								<input type="text" name="category" class="form-control">
							</div>
							<div class="form-group">
								<label for="p_date">P_Date:</label>
								<input type="date" name="p_date" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Image:</label>
								
									<form action="upload-form.php" method="post" enctype="multipart/form-data">
										<input type="file" name="photo" id="fileSelect">
									</form>
							</div>
							<input type="submit" value="Submit" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>