<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> <?php echo $site_name; ?> </title>
	<!-- <link rel="shortcut icon" href="./assets/img/logo/favicon.ico"> -->
	<?php include './layouts/script.php'; ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php include './layouts/styles.php'; ?>
</head>

<?php if ($in_concat == true) { ?>
	<body data-bs-theme="light">
		<div class="">
			<?php echo $content; ?>
		</div>
<?php } else { ?>
	<body class="bg-dark">
		<div class="page">
			<?php echo $content; ?>
		</div>
	<?php } ?>
	</body>
</html>