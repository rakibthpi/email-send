<?php require_once('header.php'); ?>
	<?php 
		if(isset($_REQUEST['apply'])){
			$name = $_REQUEST['name'];
			$phone = $_REQUEST['phone'];
			$email = $_REQUEST['email'];
			$roll = $_REQUEST['roll'];
			$reg = $_REQUEST['reg'];
			$subject = $_REQUEST['sub'];
			$message = $_REQUEST['message'];
			if(empty($name)){
				$error = 'Name is Required!';
			}
			else if(empty($phone)){
				$error = 'Phone is Requerd!';
			}
			else if(!is_numeric($phone)){
				$error = 'Phone must be number!';
			}
			else if(empty($email)){
				$error = 'Email is Requerd!';
			}
			else if(empty($roll)){
				$error = 'Roll is Requerd!';
			}
			else if(!is_numeric($roll)){
				$error = 'Roll Must be Number!';
			}
			else if(empty($reg)){
				$error = 'Register is Requerd!';
			}
			else if(!is_numeric($reg)){
				$error = 'Register Must be Number!';
			}
			else if(empty($subject)){
				$error = 'Subject is Requerd!';
			}
			else if(empty($message)){
				$error = 'Message is Requerd!';
			}
			else{
												
				$to = "rakibhosen2244@gmail.com","rakibhosen92468@gmail.com";

				$txt = "Name :".$name."\r\n".
				       "Phone :".$phone."\r\n".
						"Email :".$email."\r\n".
						"Roll :".$roll."\r\n".
						"Register :".$reg."\r\n".
						"Thank you so much!!";


				$headers = "Welcome ".$email;

				$cmail = mail($to,$subject,$txt,$headers);

				$success = 'Message Send succssful!';

				unset($_REQUEST['name']);
				unset($_REQUEST['phone']);
				unset($_REQUEST['email']);
				unset($_REQUEST['roll']);
				unset($_REQUEST['reg']);
				unset($_REQUEST['sub']);
				unset($_REQUEST['message']);

				
			}

		}
		
		

	?>
	
	<div class="contact_main_area">
		<div class="container">
			<div class="contact_main_text_area">

				<div class="col-md-6 offset-md-3">
					<?php if(isset($error)): ?>
						<div class="alert alert-danger">
							<?php echo $error; ?>
						</div>
					<?php endif; ?>

					<?php if(isset($success)): ?>
						<div class="alert alert-success">
							<?php echo $success; ?>
						</div>
					<?php endif; ?>
				</div>

					<form action="" method="POST">
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<div class="single_input_form">
									<!-- Input value area start  -->
									<input type="text" name="name" placeholder="Name" class="form-control"
									value="<?php if(isset($_REQUEST['name'])){
										echo $_REQUEST['name'];} 
									?>" >

									<input type="text" name="phone" placeholder="Phone" class="form-control"
									value="<?php if(isset($_REQUEST['phone'])){
										echo $_REQUEST['phone'];} 
									?>">
									<input type="text" name="email" placeholder="Email" class="form-control"
									value="<?php if(isset($_REQUEST['email'])){
										echo $_REQUEST['email'];} 
									?>">
									<input type="text" name="roll" placeholder="Roll" class="form-control"
									value="<?php if(isset($_REQUEST['roll'])){
										echo $_REQUEST['roll'];} 
									?>">
									<input type="text" name="reg" placeholder="Register" class="form-control"
									value="<?php if(isset($_REQUEST['reg'])){
										echo $_REQUEST['reg'];} 
									?>">
									<input type="text" name="sub" placeholder="Subject" class="form-control"
									value="<?php if(isset($_REQUEST['sub'])){
										echo $_REQUEST['sub'];} 
									?>">
									<textarea name="message" placeholder="Message" class="form-control"
									value="<?php if(isset($_REQUEST['message'])){
										echo $_REQUEST['message'];} 
									?>"></textarea>
									<div class="btn_main_area_submit">
										<input type="submit" value="Apply Now" name="apply" class="btn btn-success">
									</div>

									

								</div>
							</div>
							

						</div>
					</form>
			</div>
		</div>
	</div>

<?php require_once('footer.php'); ?>