<?php
/**
 * Template Name: Reviews
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jParsonsCustomResponsive
 */
get_header();

?>
<div id="barba-wrapper">

	<div class="barba-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section id="hero">

					<div class="hero shopHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText homeHeading reviewHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Leave Us a Review</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id ="reviewIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col50">

							<div class="blockText">

								<p>
									At Arden's Automotive Hospital we take our work very seriously and strive to provide a great experience to every customer we get to work with.
									We value every customer and love to hear how we’re doing. Thanks for all your support over the years and please share your experiences to
									help others find great automotive care in Oshkosh.
								</p>

								<a href="https://www.facebook.com/pg/ardensautohospital/reviews/?ref=page_internal" target="_blank" rel="noreferrer" class="redButton">Facebook Review</a>

								<a href="https://www.google.com/search?q=arden%27s+automotive+hospital&rlz=1C1CHBD_enUS813US813&oq=ardens+auto&aqs=chrome.4.69i57j69i60l3j0j69i65.9568j0j1&sourceid=chrome&ie=UTF-8#lrd=0x8803ebf8a244848f:0xab246929a6800b92,3,,," target="_blank" rel="noreferrer" class="redButton">Google Review</a>

							</div>

						</div>

						<div class="col50">

							<img src="/assets/scss/wp-content/uploads/2019/01/ardenAndAlexTodd.jpg" class="image">

						</div>

					</div>

				</section>

				<section class="map">

					<div class="fullWidth">

						<div>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.495470991913!2d-88.55277408449062!3d44.011154779110626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803ebf8a244848f%3A0xab246929a6800b92!2sArden&#39;s+Automotive+Hospital+LLC!5e0!3m2!1sen!2sus!4v1547119658458" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

							<div class="locationInfo">

								<div class="locationContent">

									<h5>Arden's Automotive Hospital</h5>

									<a class="plainLink" target="_blank" href="https://www.google.com/maps/place/Arden's+Automotive+Hospital+LLC/@44.0111548,-88.5527741,17z/data=!3m1!4b1!4m5!3m4!1s0x8803ebf8a244848f:0xab246929a6800b92!8m2!3d44.0111548!4d-88.5505854">

									<p>510 W 8th Ave<br>

									Oshkosh, WI 54902</p></a>

									<a class="plainLink" href="tel:(920)203-3694">(920) 203-3694</a>

									<br>

								</div>

							</div>

					</div>

				</section>

				<section class="feedback">

					<div class="feedbackButtonWrapper">

						<div class="feedbackContent">

							<button class="redButton feedbackButton"><i class="fas fa-edit"></i> Feedback</button>

						</div>

					</div>

					<div class="surveyWrapper">

						<div class="surveyContent">

							<button class="redButton surveyClose ">Close <i class="fas fa-times"></i></button>

							<div class="survey">

								<?php echo do_shortcode('[caldera_form id="CF5c387bcd0a786"]')?>

							</div>

						</div>

					</div>

				</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
