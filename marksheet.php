<!DOCTYPE html>
<html lang="en">
<head>
	<title>Marksheet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-6">
			<h1 class="display-4">Student Marks</h1>

			<form method="POST" action="result.php">
			  <div class="form-group">
			    <label>Student ID: </label>
			    <input type="text" class="form-control" name="id">
			  </div>

			  <div class="form-group">
			    <label>Student Name: </label>
			    <input type="text" class="form-control" name="name">
			  </div>

			  <div class="form-group">
			    <label>Bangla: </label>
			    <input type="text" class="form-control" name="bangla">
			  </div>

			  <div class="form-group">
			    <label>English: </label>
			    <input type="text" class="form-control" name="english">
			  </div>

			  <div class="form-group">
			    <label>Math: </label>
			    <input type="text" class="form-control" name="math">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

</body>
</html>