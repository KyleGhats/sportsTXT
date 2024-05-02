<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
	<section class="section_hero_ft container">
		<div class="px-4 py-5 my-5 text-center">
			<h1 class="display-5 fw-bold text-body-emphasis mb-3">Features</h1>
			<p class="lead mb-4">On SportsTXT, you’ll find a great mix of features enabling sports clubs and athletes to connect directly with their fans.</p>
		</div>
	</section>
	<section class="section_features">
		<div class="container col-xxl-8 px-4 py-5">
			<!-- Fanzone -->
			<div class="row flex-lg-row-reverse  align-items-center g-5 py-5">
				<div class="col-lg-6 order-lg-1 order-2">
					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Fanzone</h1>
					<p class="lead">QSportsTXT offers 24/7 protection for sports clubs with real-time monitoring and content analysis powered by a combination of human expertise and AI technology. With SportsTXT, clubs can be confident in the quality and safety of their reputation and all user-generated content.</p>
				</div>
				<div class="col-10 col-sm-8 col-lg-6 order-lg-2 order-1 img_box_ft">
					<img src="../assets/img/features/video_ft.avif" class="d-block mx-lg-auto img-fluid" alt="Video UI Mobile" width="250" height="400" loading="lazy">
				</div>
			</div>
			<!-- Video -->
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6 img_box_ft">
					<img src="../assets/img/features/chatroom_ft.avif" class="d-block mx-lg-auto img-fluid" alt="Chatroom UI Mobile" width="250" height="400" loading="lazy">
				</div>
				<div class="col-lg-6">
					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Video</h1>
					<p class="lead">Make your members feel special by offering them workouts, interviews, live matches, and even behind-the-scenes content. We support a range of video platforms, so you can easily upload videos from your phone.</p>
				</div>
			</div>
			<!-- Podcast -->
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-lg-6 order-lg-1 order-2">
					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Podcast</h1>
					<p class="lead">Weekly updates, interviews, or tip of the week? Record a podcast on your phone and share it with your community</p>
				</div>
				<div class="col-10 col-sm-8 col-lg-6 order-lg-2 order-1 img_box_ft">
					<img src="../assets/img/features/podcast_ft.avif" class="d-block mx-lg-auto img-fluid" alt="Podcast UI Mobile" width="250" height="400" loading="lazy">
				</div>
			</div>
		</div>
	</section>
	<section class="section_additional_ft">
		<div class="container px-4 py-5" id="featured-3">
			<h2 class="mb-4 text-center">Additional Features</h2>
			<div class="row g-5 py-5 row-cols-1 row-cols-lg-3">
				<div class="feature col">
					<div class="p-1 rounded-1 d-inline-flex align-items-center justify-content-center text-bg-primary bg-blue fs-2 mb-3">
						<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9888 4.25C9.90839 4.25 4.22873 9.84604 4.25006 16.6872L4.25007 16.6906C4.24998 19.0704 4.94555 21.3981 6.2509 23.3874C6.32546 23.4892 6.39521 23.5945 6.45991 23.7029L6.46505 23.7115L6.47002 23.7202C6.57478 23.9034 6.699 24.1503 6.78461 24.4228C6.86296 24.6723 6.95319 25.0789 6.83528 25.5129L6.83404 25.5175L5.73724 29.4848L9.53223 28.1152C9.91017 27.9597 10.3152 27.8804 10.7241 27.882L10.72 28.9444L10.7212 27.882C10.7222 27.882 10.7231 27.882 10.7241 27.882C11.1055 27.8828 11.4836 27.9533 11.8397 28.0902L11.8412 28.0908C12.0566 28.174 12.9146 28.4927 13.7629 28.7301C14.5969 28.9636 16.137 29.2466 17.2265 29.2466C24.2716 29.2466 29.7499 23.5901 29.7501 16.7009C29.7497 15.8463 29.6593 14.9937 29.4801 14.158L29.4797 14.1558C28.2848 8.5226 23.1588 4.25 16.9888 4.25ZM2.12507 16.6922C2.10084 8.62595 8.78301 2.125 16.9888 2.125C24.1501 2.125 30.1521 7.08762 31.5582 13.7138C31.7685 14.6953 31.8747 15.6963 31.8751 16.7001C31.8751 24.7402 25.4681 31.3716 17.2265 31.3716C15.8855 31.3716 14.1452 31.0438 13.1902 30.7765C12.2512 30.5137 11.3245 30.1691 11.077 30.0736C10.9627 30.0297 10.8413 30.0071 10.7188 30.007L10.716 30.007C10.5839 30.0065 10.4531 30.0328 10.3314 30.0843L10.3049 30.0955L5.79859 31.7218C5.81023 31.7171 5.82183 31.7122 5.83338 31.7072L5.41284 30.7315L5.77353 31.7309L5.79859 31.7218C5.61151 31.7986 5.41438 31.8482 5.21315 31.8692L5.15648 31.8752L5.09951 31.875C4.87461 31.8743 4.65208 31.829 4.44481 31.7417C4.23754 31.6544 4.04965 31.5269 3.89203 31.3665C3.73441 31.206 3.61018 31.0159 3.52655 30.8071C3.44292 30.5984 3.40155 30.3751 3.40483 30.1502L3.40529 30.1183L3.40768 30.0864C3.41855 29.9411 3.44443 29.7972 3.48488 29.6572L3.48297 29.6641L4.50698 29.9472L3.48774 29.6474C3.48678 29.6507 3.48582 29.6539 3.48488 29.6572L4.75654 25.0573C4.75678 25.0581 4.75702 25.0588 4.75726 25.0596C4.76611 25.0878 4.76818 25.1012 4.76824 25.1012C4.76825 25.1012 4.76812 25.1002 4.76794 25.0983C4.76717 25.0902 4.76268 25.0365 4.78462 24.9558L5.80995 25.2344L4.78586 24.9513L4.78462 24.9558L4.75654 25.0573C4.73335 24.9844 4.68909 24.8877 4.63031 24.7838C4.632 24.7866 4.63369 24.7894 4.63537 24.7923L5.54764 24.2476L4.62526 24.775C4.62696 24.7779 4.62864 24.7809 4.63031 24.7838C4.59833 24.7309 4.56381 24.6795 4.52686 24.6299L4.50869 24.6055L4.49195 24.5801C2.94823 22.239 2.1253 19.4964 2.12507 16.6922ZM2.12507 16.6922C2.12507 16.6927 2.12507 16.6933 2.12507 16.6939L3.18757 16.6905L2.12507 16.6905C2.12507 16.6911 2.12507 16.6916 2.12507 16.6922Z" fill="white" />
						</svg>

					</div>
					<h3 class="fs-2 text-body-emphasis">SMS</h3>
					<p>Send personalized SMS messages straight to your members' phones and show them that you value their membership.</p>
				</div>
				<div class="feature col">
					<div class="p-1 rounded-1 d-inline-flex align-items-center justify-content-center text-bg-primary bg-blue fs-2 mb-3">
						<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.6832 6.38846C12.2263 5.75539 13.0177 5.3125 13.9453 5.3125H20.0547C20.9823 5.3125 21.7737 5.75539 22.3168 6.38846C22.3502 6.42739 22.3807 6.46868 22.4081 6.51202L24.129 9.23109C24.3457 9.46084 24.5939 9.5625 24.7695 9.5625H28.6875C29.5329 9.5625 30.3436 9.89833 30.9414 10.4961C31.5392 11.0939 31.875 11.9046 31.875 12.75V25.5C31.875 26.3454 31.5392 27.1561 30.9414 27.7539C30.3436 28.3517 29.5329 28.6875 28.6875 28.6875H5.3125C4.46712 28.6875 3.65637 28.3517 3.0586 27.7539C2.46082 27.1561 2.125 26.3454 2.125 25.5V12.75C2.125 11.9046 2.46082 11.0939 3.0586 10.4961C3.65637 9.89833 4.46712 9.5625 5.3125 9.5625H9.29687C9.43658 9.5625 9.63151 9.49311 9.86937 9.23363L11.5919 6.51202C11.6193 6.46868 11.6498 6.42739 11.6832 6.38846ZM13.3401 7.72338L11.6197 10.4415C11.5925 10.4846 11.5621 10.5257 11.5289 10.5644C11.0425 11.1324 10.2932 11.6875 9.29687 11.6875H5.3125C5.03071 11.6875 4.76046 11.7994 4.5612 11.9987C4.36194 12.198 4.25 12.4682 4.25 12.75V25.5C4.25 25.7818 4.36194 26.052 4.5612 26.2513C4.76046 26.4506 5.03071 26.5625 5.3125 26.5625H28.6875C28.9693 26.5625 29.2395 26.4506 29.4388 26.2513C29.6381 26.052 29.75 25.7818 29.75 25.5V12.75C29.75 12.4682 29.6381 12.198 29.4388 11.9987C29.2395 11.7994 28.9693 11.6875 28.6875 11.6875H24.7695C23.8083 11.6875 22.9898 11.17 22.4711 10.5644C22.4379 10.5257 22.4075 10.4846 22.3803 10.4415L20.6599 7.72338C20.4689 7.52278 20.2564 7.4375 20.0547 7.4375H13.9453C13.7436 7.4375 13.5311 7.52278 13.3401 7.72338Z" fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17 13.8125C14.6528 13.8125 12.75 15.7153 12.75 18.0625C12.75 20.4097 14.6528 22.3125 17 22.3125C19.3472 22.3125 21.25 20.4097 21.25 18.0625C21.25 15.7153 19.3472 13.8125 17 13.8125ZM10.625 18.0625C10.625 14.5417 13.4792 11.6875 17 11.6875C20.5208 11.6875 23.375 14.5417 23.375 18.0625C23.375 21.5833 20.5208 24.4375 17 24.4375C13.4792 24.4375 10.625 21.5833 10.625 18.0625Z" fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57812 9.03125C5.57812 8.44445 6.05382 7.96875 6.64062 7.96875H8.23437C8.82118 7.96875 9.29687 8.44445 9.29687 9.03125V10.4922C9.29687 11.079 8.82118 11.5547 8.23437 11.5547C7.91703 11.5547 7.63219 11.4156 7.4375 11.195C7.24281 11.4156 6.95797 11.5547 6.64062 11.5547C6.05382 11.5547 5.57812 11.079 5.57812 10.4922V9.03125Z" fill="white" />
						</svg>
					</div>
					<h3 class="fs-2 text-body-emphasis">Photo</h3>
					<p>Publish photos from, games, training sessions or events. There’s no limit to how much you choose to share. Make it more personal by adding emojis, customizing colors and including text. It’s a great way to document and share all the big moments</p>
				</div>
				<div class="feature col">
					<div class="p-1 rounded-1 d-inline-flex align-items-center justify-content-center text-bg-primary bg-blue fs-2 mb-3">
						<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M4.25 10.625C4.25 10.0382 4.7257 9.5625 5.3125 9.5625H28.6875C29.2743 9.5625 29.75 10.0382 29.75 10.625C29.75 11.2118 29.2743 11.6875 28.6875 11.6875H5.3125C4.7257 11.6875 4.25 11.2118 4.25 10.625ZM4.25 17C4.25 16.4132 4.7257 15.9375 5.3125 15.9375H21.5C22.0868 15.9375 22.5625 16.4132 22.5625 17C22.5625 17.5868 22.0868 18.0625 21.5 18.0625H5.3125C4.7257 18.0625 4.25 17.5868 4.25 17ZM4.25 23.375C4.25 22.7882 4.7257 22.3125 5.3125 22.3125H28.6875C29.2743 22.3125 29.75 22.7882 29.75 23.375C29.75 23.9618 29.2743 24.4375 28.6875 24.4375H5.3125C4.7257 24.4375 4.25 23.9618 4.25 23.375Z" fill="white" />
						</svg>
					</div>
					<h3 class="fs-2 text-body-emphasis">Poll</h3>
					<p>Get real-time feedback from your fans. Ask questions and test their knowledge with our online quizzes and voting features.</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php include '../layouts/base.php'; ?>
<script src="../assets/js/default.js?=<?php echo $randomNumber; ?>"></script>