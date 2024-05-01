<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> <?php echo $site_name; ?> </title>
	<!-- <link rel="shortcut icon" href="./assets/img/logo/favicon.ico"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<?php include './layouts/styles.php'; ?>
</head>

<?php if ($in_concat == true) { ?>

	<body data-bs-theme="dark">
		<?php include './layouts/topnav.php'; ?>
		<div class="">
			<?php echo $content; ?>
		</div>
		<?php include './layouts/footer.php'; ?>
	<?php } else { ?>

		<body data-bs-theme="dark">
			<?php include '../layouts/topnav.php'; ?>
			<div class="page">
				<?php echo $content; ?>
			</div>
			<?php include './layouts/footer.php'; ?>
		<?php } ?>
		</body>

</html>