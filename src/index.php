<?php
include_once("./connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main class="container mx-auto">
	<section class="section_hero">
		<div class=" col-xxl-8 px-4 py-5">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6">
					<img src="./assets/img/hero_img.avif" class="d-block mx-lg-auto img-fluid" alt="Athletes collage image" width="600" height="400" loading="lazy">
				</div>
				<div class="col-lg-6 hero_text_box">
					<h1 class="display-5 fw-normal text-body-emphasis lh-1 mb-4 hero_title">Creating Value Off the Pitch with a <span class="highlight_txt">Fan First</span> Engagement Platform</h1>
					<p class="lead mb-5">Find fellow fans of your favorite teams! Create an account now and join the millions of sports enthusiasts around the world!</p>
					<button type="button" class="btn default_btn btn-lg px-4 me-md-2">Become a member</button>
				</div>
			</div>
		</div>
	</section>
	<section class="section section_about">
		<div class="row align-items-center about_container">
			<div class="px-4 py-5 text-center">
				<h1 class="display-5 fw-bold text-body-emphasis mb-4">What is SportsTXT?</h1>
				<p class="lead mb-5">Being a sports fan is not just about watching games. SportsTXT is an online platform designed to deliver the ultimate sports fan experience. Engage with other fans, get insider facts about your favorite teams, and so much more.</p>
				<div class="col-lg-12 mx-auto">
					<div class="about_img_container">
						<img src="./assets/img/about_img.avif" class="d-block mx-lg-auto img-fluid" alt="Football Field" width="700" height="400" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section_mission">
		<div class=" col-xxl-8 px-4 py-5">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6">
					<img src="./assets/img/mission.avif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
				</div>
				<div class="col-lg-6">
					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Our <span class="highlight_txt">Mission</span></h1>
					<p class="lead">Our mission is to provide our users with a seamless and enjoyable online experience, offering a diverse range of high-quality content and services that inform, inspire, and engage. Through innovative design and intuitive functionality, we aim to create a platform that connects people and facilitates meaningful interactions.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section_how">
		<div class=" px-4 py-5" id="featured-3">
			<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 pb-4 border-bottom">How it Works?</h1>
			<div class="row g-5 py-5 row-cols-1 row-cols-lg-3 hiw_box text-center">
				<div class="col">
					<div class="hiw_box_item h-100 p-4 card">
						<div class="d-inline-flex align-items-center justify-content-center mb-3">
							<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_54_35660)">
									<path d="M35.75 23.0486L22 36.6666L8.24999 23.0486C7.34305 22.1661 6.62867 21.1053 6.15183 19.9331C5.67499 18.7609 5.44602 17.5027 5.47934 16.2377C5.51267 14.9726 5.80756 13.7282 6.34545 12.5827C6.88334 11.4373 7.65257 10.4156 8.60472 9.58202C9.55686 8.74845 10.6713 8.12105 11.8778 7.73934C13.0843 7.35762 14.3568 7.22986 15.6152 7.36409C16.8735 7.49833 18.0904 7.89165 19.1893 8.51929C20.2881 9.14693 21.2451 9.99529 22 11.011C22.7581 10.0027 23.7162 9.16171 24.8143 8.54073C25.9124 7.91975 27.1269 7.53212 28.3817 7.40208C29.6365 7.27204 30.9046 7.4024 32.1067 7.78501C33.3088 8.16762 34.419 8.79423 35.3678 9.62562C36.3166 10.457 37.0836 11.4753 37.6208 12.6168C38.1579 13.7582 38.4537 14.9982 38.4896 16.2593C38.5254 17.5203 38.3006 18.7751 37.8292 19.9453C37.3578 21.1154 36.65 22.1756 35.75 23.0596" stroke="#F9FAFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M22 11L15.9628 17.0372C15.6191 17.381 15.4261 17.8472 15.4261 18.3333C15.4261 18.8195 15.6191 19.2857 15.9628 19.6295L16.9583 20.625C18.2233 21.89 20.2767 21.89 21.5417 20.625L23.375 18.7917C24.469 17.6977 25.9528 17.0831 27.5 17.0831C29.0472 17.0831 30.531 17.6977 31.625 18.7917L35.75 22.9167" stroke="#F9FAFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M22.9167 28.4166L26.5833 32.0833" stroke="#F9FAFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M27.5 23.8334L31.1667 27.5" stroke="#F9FAFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_54_35660">
										<rect width="44" height="44" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</div>
						<h3 class="fs-2 text-body-emphasis mb-4">Customization and Connection</h3>
						<p>SportsTXT allows sports clubs and teams to customize their community platform to suit their needs. Members and fans can connect directly in real-time, fostering a sense of belonging within the community.</p>
					</div>
				</div>
				<div class="col">
					<div class="hiw_box_item h-100 p-4 card">
						<div class="d-inline-flex align-items-center justify-content-center mb-3">
							<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22 25.6667V29.3334C19.0826 29.3334 16.2847 30.4923 14.2218 32.5552C12.1589 34.6181 11 37.416 11 40.3334H7.33333C7.33333 36.4435 8.87857 32.713 11.6291 29.9625C14.3796 27.2119 18.1102 25.6667 22 25.6667ZM22 23.8334C15.9225 23.8334 11 18.9109 11 12.8334C11 6.75587 15.9225 1.83337 22 1.83337C28.0775 1.83337 33 6.75587 33 12.8334C33 18.9109 28.0775 23.8334 22 23.8334ZM22 20.1667C26.0517 20.1667 29.3333 16.885 29.3333 12.8334C29.3333 8.78171 26.0517 5.50004 22 5.50004C17.9483 5.50004 14.6667 8.78171 14.6667 12.8334C14.6667 16.885 17.9483 20.1667 22 20.1667ZM26.7575 34.4887C26.525 33.5105 26.525 32.4914 26.7575 31.5132L24.9388 30.4627L26.7722 27.2874L28.5908 28.3379C29.3208 27.6465 30.2032 27.1365 31.1667 26.8492V24.75H34.8333V26.8492C35.8087 27.1389 36.6887 27.6559 37.4092 28.3379L39.2278 27.2874L41.0612 30.4627L39.2425 31.5132C39.4747 32.4908 39.4747 33.5092 39.2425 34.4869L41.0612 35.5374L39.2278 38.7127L37.4092 37.6622C36.6792 38.3536 35.7968 38.8636 34.8333 39.1509V41.25H31.1667V39.1509C30.2032 38.8636 29.3208 38.3536 28.5908 37.6622L26.7722 38.7127L24.9388 35.5374L26.7575 34.4887ZM33 35.75C33.7293 35.75 34.4288 35.4603 34.9445 34.9446C35.4603 34.4289 35.75 33.7294 35.75 33C35.75 32.2707 35.4603 31.5712 34.9445 31.0555C34.4288 30.5398 33.7293 30.25 33 30.25C32.2707 30.25 31.5712 30.5398 31.0555 31.0555C30.5397 31.5712 30.25 32.2707 30.25 33C30.25 33.7294 30.5397 34.4289 31.0555 34.9446C31.5712 35.4603 32.2707 35.75 33 35.75Z" fill="#F9FAFB" />
							</svg>

						</div>
						<h3 class="fs-2 text-body-emphasis mb-4">Personalized Experiences</h3>
						<p>This platform enables sports clubs to personalize experiences for members and fans by capturing valuable data on preferences and interests, allowing tailored content for specific segments, boosting engagement and satisfaction.</p>
					</div>
				</div>
				<div class="col">
					<div class="hiw_box_item h-100 p-4 card">
						<div class="d-inline-flex align-items-center justify-content-center mb-3">
							<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M25.6667 3.66663C29.0216 3.66503 32.2757 4.81368 34.8862 6.92102C37.4967 9.02837 39.3059 11.967 40.0119 15.2468C40.7179 18.5266 40.2781 21.9494 38.7659 24.9442C37.2537 27.939 34.7604 30.3248 31.702 31.7038C30.7244 33.8651 29.2371 35.7571 27.3677 37.2174C25.4984 38.6777 23.3027 39.6628 20.969 40.0883C18.6353 40.5137 16.2332 40.3667 13.9688 39.6599C11.7044 38.9531 9.64522 37.7076 7.96786 36.0303C6.29049 34.3529 5.04501 32.2937 4.33823 30.0293C3.63145 27.7649 3.48445 25.3628 3.90986 23.0291C4.33527 20.6954 5.32037 18.4998 6.7807 16.6304C8.24102 14.761 10.133 13.2737 12.2943 12.2961C13.4569 9.72376 15.3369 7.54138 17.7088 6.01074C20.0807 4.4801 22.8438 3.66619 25.6667 3.66663ZM18.3333 14.6666C16.8888 14.6666 15.4584 14.9512 14.1238 15.504C12.7892 16.0568 11.5766 16.867 10.5551 17.8885C9.5337 18.9099 8.72345 20.1225 8.17064 21.4571C7.61784 22.7917 7.33332 24.2221 7.33332 25.6666C7.33332 27.1112 7.61784 28.5416 8.17064 29.8761C8.72345 31.2107 9.5337 32.4234 10.5551 33.4448C11.5766 34.4662 12.7892 35.2765 14.1238 35.8293C15.4584 36.3821 16.8888 36.6666 18.3333 36.6666C21.2507 36.6666 24.0486 35.5077 26.1115 33.4448C28.1744 31.3819 29.3333 28.584 29.3333 25.6666C29.3333 22.7492 28.1744 19.9514 26.1115 17.8885C24.0486 15.8256 21.2507 14.6666 18.3333 14.6666ZM20.1667 16.5V18.3333H23.8333V22H16.5C16.2709 21.9995 16.05 22.0849 15.8807 22.2392C15.7114 22.3936 15.6061 22.6057 15.5854 22.8338C15.5647 23.0619 15.6302 23.2895 15.7689 23.4718C15.9076 23.6541 16.1096 23.7778 16.335 23.8186L16.5 23.8333H20.1667C21.3822 23.8333 22.548 24.3162 23.4076 25.1757C24.2671 26.0353 24.75 27.2011 24.75 28.4166C24.75 29.6322 24.2671 30.798 23.4076 31.6575C22.548 32.5171 21.3822 33 20.1667 33V34.8333H16.5V33H12.8333V29.3333H20.1667C20.3957 29.3337 20.6166 29.2484 20.7859 29.094C20.9552 28.9397 21.0606 28.7276 21.0813 28.4995C21.102 28.2713 21.0365 28.0437 20.8977 27.8614C20.759 27.6792 20.5571 27.5554 20.3317 27.5146L20.1667 27.5H16.5C15.2844 27.5 14.1186 27.0171 13.2591 26.1575C12.3995 25.298 11.9167 24.1322 11.9167 22.9166C11.9167 21.7011 12.3995 20.5353 13.2591 19.6757C14.1186 18.8162 15.2844 18.3333 16.5 18.3333V16.5H20.1667ZM25.6667 7.33329C24.1132 7.33148 22.5771 7.65952 21.16 8.29572C19.7428 8.93193 18.4769 9.86179 17.446 11.0238C19.5181 10.898 21.5934 11.2135 23.5345 11.9495C25.4756 12.6855 27.2384 13.8252 28.7062 15.2932C30.1741 16.7612 31.3135 18.5241 32.0493 20.4653C32.7851 22.4065 33.1004 24.4818 32.9743 26.554C34.6412 25.0719 35.8182 23.1182 36.3492 20.9519C36.8801 18.7855 36.74 16.509 35.9473 14.4241C35.1547 12.3393 33.7469 10.5446 31.9109 9.27824C30.0748 8.01186 27.8971 7.33355 25.6667 7.33329Z" fill="#F9FAFB" />
							</svg>
						</div>
						<h3 class="fs-2 text-body-emphasis mb-4">Revenue Generation</h3>
						<p>SportsTXT boosts community engagement and creates new revenue streams for sports clubs by offering monetization avenues like sponsorships, merchandise sales, and premium content subscriptions, ensuring financial sustainability.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section_platform_of_first">
		<div class="container px-4 py-5">
			<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 pb-4 border-bottom">The platform of first</h1>
			<div class="row row-cols-1 row-cols-sm-2 g-5 py-5">
				<div class="col d-flex flex-column gap-2">
					<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M25 29.1666V33.3333C21.6848 33.3333 18.5054 34.6502 16.1611 36.9944C13.8169 39.3386 12.5 42.518 12.5 45.8333H8.33331C8.33331 41.413 10.0893 37.1737 13.2149 34.0481C16.3405 30.9225 20.5797 29.1666 25 29.1666ZM25 27.0833C18.0937 27.0833 12.5 21.4895 12.5 14.5833C12.5 7.677 18.0937 2.08325 25 2.08325C31.9062 2.08325 37.5 7.677 37.5 14.5833C37.5 21.4895 31.9062 27.0833 25 27.0833ZM25 22.9166C29.6041 22.9166 33.3333 19.1874 33.3333 14.5833C33.3333 9.97909 29.6041 6.24992 25 6.24992C20.3958 6.24992 16.6666 9.97909 16.6666 14.5833C16.6666 19.1874 20.3958 22.9166 25 22.9166ZM37.5 44.7916L31.3771 48.0103L32.5458 41.1937L27.5937 36.3645L34.4396 35.3687L37.5 29.1666L40.5625 35.3687L47.4062 36.3645L42.4541 41.1937L43.6208 48.0103L37.5 44.7916Z" fill="#E61A27" />
					</svg>
					<h4 class="fw-semibold mb-0 text-body-emphasis mb-3">Members First</h4>
					<p class="text-body-secondary">It's time to elevate your fan engagement beyond just using social media and SportsTXT brings your members straight into the heart of your club through exclusive stories, new experiences, games and unique offers.</p>
				</div>

				<div class="col d-flex flex-column gap-2">
					<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M25 2.08325L42.1187 5.88742C43.0708 6.09992 43.75 6.94367 43.75 7.92075V28.727C43.75 32.9062 41.6604 36.8103 38.1833 39.127L25 47.9166L11.8167 39.127C8.3375 36.8083 6.25 32.9062 6.25 28.7291V7.92075C6.25 6.94367 6.92917 6.09992 7.88125 5.88742L25 2.08325ZM25 6.352L10.4167 9.59159V28.727C10.4167 31.5124 11.8083 34.1145 14.1271 35.6603L25 42.9103L35.8729 35.6603C38.1917 34.1145 39.5833 31.5145 39.5833 28.7291V9.59159L25 6.352ZM34.275 17.1291L37.2229 20.0749L23.9646 33.3333L15.125 24.4937L18.0708 21.5478L23.9625 27.4395L34.275 17.127V17.1291Z" fill="#E61A27" />
					</svg>

					<h4 class="fw-semibold mb-0 text-body-emphasis mb-3">Safety First</h4>
					<p class="text-body-secondary">SportsTXT offers 24/7 protection for sports clubs with real-time monitoring and content analysis powered by a combination of human expertise and AI technology. With SportsTXT, clubs can be confident in the quality and safety of their reputation and all user-generated content.</p>
				</div>

				<div class="col d-flex flex-column gap-2">
					<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21.6959 6.25L25.8625 10.4167H43.75C44.3026 10.4167 44.8325 10.6362 45.2232 11.0269C45.6139 11.4176 45.8334 11.9475 45.8334 12.5V41.6667C45.8334 42.2192 45.6139 42.7491 45.2232 43.1398C44.8325 43.5305 44.3026 43.75 43.75 43.75H6.25002C5.69749 43.75 5.16758 43.5305 4.77688 43.1398C4.38618 42.7491 4.16669 42.2192 4.16669 41.6667V8.33333C4.16669 7.7808 4.38618 7.25089 4.77688 6.86019C5.16758 6.46949 5.69749 6.25 6.25002 6.25H21.6959ZM19.9709 10.4167H8.33335V39.5833H41.6667V14.5833H24.1375L19.9709 10.4167ZM25 18.75C25.9174 18.7496 26.8093 19.0519 27.5373 19.6101C28.2653 20.1683 28.7887 20.9512 29.0263 21.8372C29.264 22.7233 29.2026 23.663 28.8517 24.5106C28.5007 25.3582 27.8799 26.0663 27.0854 26.525L27.0834 35.4167H22.9167V26.525C22.1224 26.0664 21.5016 25.3585 21.1507 24.5111C20.7997 23.6637 20.7381 22.7242 20.9755 21.8382C21.2129 20.9523 21.736 20.1694 22.4636 19.6111C23.1913 19.0527 24.0828 18.75 25 18.75Z" fill="#E61A27" />
					</svg>

					<h4 class="fw-semibold mb-0 text-body-emphasis mb-3">Data First</h4>
					<p class="text-body-secondary">Contrary to social media, you have full ownership of your data. Your personal dashboard collects and analyzes important insights about members' usage of the platform, demographics and other data to help you make better business decisions.</p>
				</div>

				<div class="col d-flex flex-column gap-2">
					<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10.4167 18.7501C10.9692 18.7501 11.4991 18.9696 11.8898 19.3603C12.2805 19.751 12.5 20.2809 12.5 20.8334C15.7732 20.8286 18.952 21.9298 21.5208 23.9584H26.0417C28.8188 23.9584 31.3125 25.1667 33.0292 27.0834H39.5833C41.5526 27.0829 43.4817 27.6406 45.147 28.6918C46.8122 29.7431 48.1453 31.2449 48.9917 33.023C44.0646 39.5251 36.0875 43.7501 27.0833 43.7501C21.2708 43.7501 16.3542 42.4938 12.375 40.2959C12.2293 40.6981 11.963 41.0456 11.6125 41.2909C11.2621 41.5362 10.8445 41.6675 10.4167 41.6667H4.16667C3.61413 41.6667 3.08423 41.4473 2.69353 41.0566C2.30283 40.6659 2.08334 40.1359 2.08334 39.5834V20.8334C2.08334 20.2809 2.30283 19.751 2.69353 19.3603C3.08423 18.9696 3.61413 18.7501 4.16667 18.7501H10.4167ZM12.5021 25.0001L12.5 35.4626L12.5938 35.5292C16.3333 38.1542 21.2042 39.5834 27.0833 39.5834C33.3417 39.5834 39.1646 37.1751 43.4063 33.0626L43.6833 32.7855L43.4333 32.5772C42.4496 31.8067 41.2571 31.3494 40.0104 31.2647L39.5833 31.2501H35.1854C35.3354 31.9209 35.4167 32.6167 35.4167 33.3334V35.4167H16.6667V31.2501L30.8125 31.248L30.7417 31.0855C30.3424 30.2512 29.7283 29.5382 28.9623 29.0198C28.1964 28.5014 27.3063 28.1961 26.3833 28.1355L26.0417 28.1251H19.9375C18.9694 27.1349 17.8131 26.3484 16.5365 25.8117C15.2599 25.275 13.8869 24.9991 12.5021 25.0001ZM8.33334 22.9167H6.25V37.5001H8.33334V22.9167ZM37.5 10.4167C39.1576 10.4167 40.7473 11.0752 41.9194 12.2473C43.0915 13.4194 43.75 15.0091 43.75 16.6667C43.75 18.3244 43.0915 19.9141 41.9194 21.0862C40.7473 22.2583 39.1576 22.9167 37.5 22.9167C35.8424 22.9167 34.2527 22.2583 33.0806 21.0862C31.9085 19.9141 31.25 18.3244 31.25 16.6667C31.25 15.0091 31.9085 13.4194 33.0806 12.2473C34.2527 11.0752 35.8424 10.4167 37.5 10.4167ZM37.5 14.5834C36.9475 14.5834 36.4176 14.8029 36.0269 15.1936C35.6362 15.5843 35.4167 16.1142 35.4167 16.6667C35.4167 17.2193 35.6362 17.7492 36.0269 18.1399C36.4176 18.5306 36.9475 18.7501 37.5 18.7501C38.0525 18.7501 38.5824 18.5306 38.9731 18.1399C39.3638 17.7492 39.5833 17.2193 39.5833 16.6667C39.5833 16.1142 39.3638 15.5843 38.9731 15.1936C38.5824 14.8029 38.0525 14.5834 37.5 14.5834ZM22.9167 4.16675C24.5743 4.16675 26.164 4.82523 27.3361 5.99733C28.5082 7.16943 29.1667 8.75914 29.1667 10.4167C29.1667 12.0744 28.5082 13.6641 27.3361 14.8362C26.164 16.0083 24.5743 16.6667 22.9167 16.6667C21.2591 16.6667 19.6694 16.0083 18.4973 14.8362C17.3251 13.6641 16.6667 12.0744 16.6667 10.4167C16.6667 8.75914 17.3251 7.16943 18.4973 5.99733C19.6694 4.82523 21.2591 4.16675 22.9167 4.16675ZM22.9167 8.33341C22.3641 8.33341 21.8342 8.55291 21.4435 8.94361C21.0528 9.33431 20.8333 9.86421 20.8333 10.4167C20.8333 10.9693 21.0528 11.4992 21.4435 11.8899C21.8342 12.2806 22.3641 12.5001 22.9167 12.5001C23.4692 12.5001 23.9991 12.2806 24.3898 11.8899C24.7805 11.4992 25 10.9693 25 10.4167C25 9.86421 24.7805 9.33431 24.3898 8.94361C23.9991 8.55291 23.4692 8.33341 22.9167 8.33341Z" fill="#E61A27" />
					</svg>

					<h4 class="fw-semibold mb-0 text-body-emphasis mb-3">Value First</h4>
					<p class="text-body-secondary">By making a few small tweaks in the way you present your content, you will be amazed at how it can significantly boost your profits. You have the opportunity to set your content prices based on your own judgment and enhance its worth with the support of sponsors.</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php include './layouts/base.php'; ?>
<script src="./assets/js/default.js?=<?php echo $randomNumber; ?>"></script>