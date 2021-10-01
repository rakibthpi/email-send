<?php require_once('header.php'); ?>

	<?php 
		function name($num){
			$num *= 5; ?>
			<h1 class="text-center m-4"><?php echo $num; ?></h1>
			<?php
		}

		name(4);
	?>

<?php require_once('footer.php'); ?>