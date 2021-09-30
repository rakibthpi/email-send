<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google fonts  -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<!-- Bootstrap Css link  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<title><?php echo "Basic Template || Email Template"; ?></title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
	

	<header class="header_main_area">
		<div class="container">
			<div class="header_main_text_area">
				<div class="header_logo_area">
					<h1><a href="#">Logo</a></h1>
				</div>
				<div class="header_menu_area">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Services</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="content_main_area">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="content_single_item">
						<h2></h2>
					</div>
				</div>
			</div>
		</div>
	</div>




<!-- 	<form action="form.php" method="POST">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-3">
				<div class="single_input_form">
					<input type="text" name="name" placeholder="Name" class="form-control">
				</div>
			</div>
			<div class="col-md-6 offset-md-3  mt-3">
				<div class="single_input_form">
					<input type="text" name="roll" placeholder="Roll" class="form-control">
				</div>
			</div>
			<div class="col-md-6 offset-md-3  mt-3">
				<div class="single_input_form">
					<input type="submit" value="Apply Now" name="apply" class="btn btn-primary">
				</div>
			</div>

			<?php if(isset($_GET['error'])): ?>
			<div class="col-md-6 offset-md-3  mt-3 btn-danger  pt-1 pb-2">
				<div class="single_input_form text-center">
					<?php echo 'Error'; ?>
				</div>
			</div>
			<?php endif; ?>

			<?php if(isset($_GET['success'])): ?>
			<div class="col-md-6 offset-md-3  mt-3 btn-success pt-1 pb-2">
				<div class="single_input_form text-center">
					<?php echo 'Success'; ?>
				</div>
			</div>
			<?php endif; ?>


		</div>
	</form> -->

</body>
</html>