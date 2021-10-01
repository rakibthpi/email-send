<?php require_once('header.php'); ?>

	<div class="contact_main_area">
		<div class="container">
			<div class="contact_main_text_area">
					<form action="form.php" method="POST">
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<div class="single_input_form">
									<input type="text" name="name" placeholder="Name" class="form-control">
									<input type="text" name="phone" placeholder="Phone" class="form-control">
									<input type="text" name="roll" placeholder="Roll" class="form-control">
									<input type="text" name="reg" placeholder="Register" class="form-control">
									<textarea name="message" placeholder="Message" class="form-control"></textarea>
									<div class="btn_main_area_submit">
										<input type="submit" value="Apply Now" name="apply" class="btn btn-success">
									</div>
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
					</form>
			</div>
		</div>
	</div>

<?php require_once('footer.php'); ?>