<?php
	$myId = $_POST['id'];
	$myName = $_POST['name'];
	$bangla = $_POST['bangla'];
	$english = $_POST['english'];
	$math = $_POST['math'];

	$total = $bangla + $english + $math;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="display-4">Result</h1>
		<div class="col-lg-8">
			<ul class="list-group">
			  <li class="list-group-item"><strong>Student ID: </strong><?php echo $myId; ?></li>
			  <li class="list-group-item"><strong>Student Name: </strong> <?php echo $myName; ?></li>

			  <li class="list-group-item"><strong>Bangla: </strong>
					<?php
						if($bangla >= 80 && $bangla <= 100){
							echo 'A+';
							$bgpa = 5;
						}elseif($bangla >= 60 && $bangla <= 79){
							echo 'A';
							$bgpa = 4;
						}elseif($bangla >= 40 && $bangla <= 59){
							echo 'B';
							$bgpa = 3;
						}elseif($bangla < 40){
							echo 'Fail';
						}
					?>
			  </li>

			  <li class="list-group-item"><strong>English: </strong>
					<?php
						if($english >= 80 && $english <= 100){
							echo 'A+';
							$egpa = 5;
						}elseif($english >= 60 && $english <= 79){
							echo 'A';
							$egpa = 4;
						}elseif($english >= 40 && $english <= 59){
							echo 'B';
							$egpa = 3;
						}elseif($english < 40){
							echo 'Fail';
						}
					?>
			  </li>
			  <li class="list-group-item"><strong>Math: </strong>
					<?php
						if($math >= 80 && $math <= 100){
							echo 'A+';
							$mgpa = 5;
						}elseif($math >= 60 && $math <= 79){
							echo 'A';
							$mgpa = 4;
						}elseif($math >= 40 && $math <= 59){
							echo 'B';
							$mgpa = 3;
						}elseif($math < 40){
							echo 'Fail';
						}
					?>
			  </li>
			  <li class="list-group-item bg-primary text-white"><strong>Total: </strong>
					<?php
						$avg_gpa = ($bgpa + $egpa + $mgpa) / 3;
						echo $avg_gpa;
					?>
			  </li>
			</ul>
		</div>
	</div>
</body>
</html>