<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
	<section class="section_hero_ft container pb-5">
		<div class="px-4 py-5 my-5 text-center">
			<h1 class="display-5 fw-bold text-body-emphasis mb-3">About us</h1>
		</div>
	</section>
	<section class=" section_about_pg3 container py-5">
		<div class=" px-4 py-md-5 py-3">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-md-5">
				<div class="col-lg-6">
					<p class="lead fs-4 fw-medium">SportsTXT is an initiative from NMS Productions BV, a division of
						New Media Services, a global company specializing in delivering
						intelligent outsourcing services through a combination of machine
						learning and human-powered activities.
					</p>
					<p class="lead">From fans to brands to individual content creators, NMSP designs
						and builds collaborative online platforms for our users to
						communicate, connect, learn, and share.
					</p>
				</div>
				<div class="col-10 col-sm-8 col-lg-6">
					<img src="../assets/img/about_bg.avif" class="d-block mx-lg-auto img-fluid" alt="coach teaching" width="450" height="500" loading="lazy">
				</div>
			</div>
		</div>
	</section>
	<section class="section section_keyppl pt-5">
		<div class=" py-8 py-md-5 py-xl-8">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
						<h2 class="mb-5 display-5 fw-semibold text-center">Key People</h2>
						<hr class="w-50 mx-auto mb-5 mb-xl-9 border-0">
					</div>
				</div>
			</div>

			<div class="container overflow-hidden">
				<div class="row g-5 justify-content-center">
					<div class="col-12 col-md-6 col-lg-4 text-center">
						<div class=" border-0 shadow-sm overflow-hidden">
							<div class="p-0">
								<figure class="m-0 p-0">
									<img class="img-fluid about_img" loading="lazy" src="../assets/img/about/Boss.avif" alt="" width="230">
									<figcaption class="border-0 m-0 p-4">
										<h4 class="mb-1">Martin</h4>
										<p class="text-secondary mb-0">Founder</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 text-center">
						<div class=" shadow-sm overflow-hidden">
							<div class="p-0">
								<figure class="m-0 p-0">
									<img class="img-fluid about_img" loading="lazy" src="../assets/img/about/Atty.avif" alt="" width="230">
									<figcaption class="border-0 m-0 p-4">
										<h4 class="mb-1">Raffy</h4>
										<p class="text-secondary mb-0">Chief Executive Officer</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 text-center">
						<div class=" shadow-sm overflow-hidden">
							<div class="p-0">
								<figure class="m-0 p-0">
									<img class="img-fluid about_img" loading="lazy" src="../assets/img/about/Meg.avif" alt="" width="230">
									<figcaption class="border-0 m-0 p-4">
										<h4 class="mb-1">Silvia</h4>
										<p class="text-secondary mb-0">Director of Sales and Marketing</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 text-center">
						<div class=" shadow-sm overflow-hidden">
							<div class="p-0">
								<figure class="m-0 p-0">
									<img class="img-fluid about_img" loading="lazy" src="../assets/img/about/Sheena.avif" alt="" width="230">
									<figcaption class="border-0 m-0 p-4">
										<h4 class="mb-1">Sheena</h4>
										<p class="text-secondary mb-0">Director of Online Support Services Department</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 text-center">
						<div class=" shadow-sm overflow-hidden">
							<div class="p-0">
								<figure class="m-0 p-0">
									<img class="img-fluid about_img" loading="lazy" src="../assets/img/about/Karlo.avif" alt="" width="230">
									<figcaption class="border-0 m-0 p-4">
										<h4 class="mb-1">Karlo</h4>
										<p class="text-secondary mb-0">Director of IT Department</p>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include '../layouts/cta.php'; ?>
</main>
<?php $content = ob_get_clean(); ?>
<?php $scripts = ob_get_clean(); ?>

<?php include '../layouts/base.php'; ?>
<script src="../assets/js/default.js?=<?php echo $randomNumber; ?>"></script>