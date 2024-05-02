<?php 
if ($dirFileName === "features") {
	$feature = "active";
} elseif ($dirFileName === "about") {
	$about = "active";
} elseif ($dirFileName === "contact") {
	$contact = "active";
} else {
	$home = "active";
}
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="Fourth navbar example">
	<div class="container">
		<a class="navbar-brand" href="#">
			<?php if ($in_concat == true) { ?>
				<img src="./assets/img/logo/logo.avif" class="d-block mx-lg-auto img-fluid" alt="sportsTxT Logo" loading="lazy">
			<?php } else { ?>
				<img src="../assets/img/logo/logo.avif" class="d-block mx-lg-auto img-fluid" alt="sportsTxT Logo" loading="lazy">
			<?php } ?>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample04">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link <?php echo $home ?>" aria-current="page" href="<?php echo $in_concat === true ? './' : '../'?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo $feature ?>" href="<?php echo $in_concat === true ? './features' : '../features'?>">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo $about ?>" href="../about">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo $contact ?>" href="../contact">Contact Us</a>
				</li>
			</ul>
			<button type="button" class="btn default_btn px-4 py-2">Join the club</button>
		</div>
	</div>
</nav>