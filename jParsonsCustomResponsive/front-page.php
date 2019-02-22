<?php
/**
 * Template Name: Home
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

					<div class="hero homeHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="homeHeading">

									<div class="heroHeading">

										<h1 class="whiteText">High Quality, Fully Personalized Tattoo Experience from Beginning to End</h1>

										<p class="whiteText">Your tattoo is 100% designed and tailored for you and you only, in a completely private and relaxed setting</p>

										<a href="/endlessExpansion/tattoo-portfolio/" class="primaryButton" role="link">View Portfolio</a>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section id ="endlessIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col70 whiteText limitWidth">

							<h2>Fully Customizable, Completely Personal, Endlessly Creative Tattoo Experience</h2>

							<p>
								This isn't your average tattoo shop. It’s all about you and your needs. Unlike most studios, tattoo sessions are by appointment only,
								there is no intrusion from foot traffic. You are the primary focus.
							</p>

							<p>
								At Endless Expansion Custom Tattooing, you'll receive a creative and relaxing one on one experience with a highly skilled professional
								with nearly seventeen years of experience. Your tattoo will be a one of a kind work of art, fully personalized to your body, that will
								keep you coming back again and again.
							</p>

						</div>

					</div>

				</section>

				<section id ="ardensIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col50">

							<div class="blockText">

								<h2>Fully Customizable, Completely Personal, Endlessly Creative Tattoo Experience</h2>

								<p>
									Arden's Automotive Hospital has been a family owned and operated auto repair shop since 1959. At Arden's, you’ll experience our great
									customer service and honest opinion.
								</p>

								<p>
									We know you need to get the job done quickly so you get your car back on the road. But most importantly, you need the job done right.
									At Arden’s, we pride ourselves in taking the extra time to properly diagnose your car's issues. Saving you money and getting you back
									on the road faster.
								</p>

								<a href="/about/" class="redButton" role="link">Learn More About Arden's</a>

							</div>

						</div>

						<div class="col50">

							<img
							srcset="/assets/scss/wp-content/uploads/2019/01/ardensOldTruck-400.jpg 400w,
							 /assets/scss/wp-content/uploads/2019/01/ardensOldTruck-600.jpg 600w,
							 /assets/scss/wp-content/uploads/2019/01/ardensOldTruck-800.jpg 800w,
							 /assets/scss/wp-content/uploads/2019/01/ardensOldTruck.jpg 1200w"
							 src="/assets/scss/wp-content/uploads/2019/01/ardensOldTruck.jpg"
							 class="image" alt="Arden's Auto old classic tow truck parked in front of building">

						</div>

					</div>

				</section>

				<section class="ardensBenefits paddedSection">

					<?php get_template_part('Includes/benefits'); ?>

				</section>

				<section id="services">

					<div class="pageWidth">

						<h2 class="centerText">Auto Maintenance Is Hard, Right?</h2>

						<p id="serviceHook">
							Is your car making that weird noise again? Not sure what’s going on or how to figure it out? With experience from oil changes, brakes, and
							tires to troubleshooting and diagnosing engine failures, at Arden’s you’ll find an expert and fair diagnosis and repair for all your
							car’s issues. Does your vehicle need attention right away? Schedule an appointment or call Arden’s today at <a href="tel:(920)203-3694" class="plainLink">(920) 203-3694</a>.
						</p>

					</div>

					<?php get_template_part('Includes/services'); ?>

				</section>

				<section class="testimonial">

					<div class="navWidth smallPaddedSection">

						<div class="col60 centeredContainer">

							<div class="raisedTextBox">

								<div class="textWrap">

									<h3>Client Feedback</h3>

									<p>

										" This a great family owned business that prides itself on honesty and trustworthiness. They really make you feel a part of the family when you're there. Prices
										are always fair and you can trust that the work being done is of high quality. "

										<br><br>

										-Kailey Lemon
									</p>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="featuredProjects">

					<div class="fullWidth whiteBlock">

						<div class="navWidth paddedSection">

							<div class="fullWidth">

									<h3 class="centerText">Featured Auto Repair Projects</h3>

							</div>

							<div class="fullWidth serviceFlexContainer">

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/jeep-cherokee/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage"
							          srcset="/assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-400.jpg 400w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-500.jpg 600w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFront-600.jpg 800w,
							           /assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFrontCropped.jpg 1200w"
							          sizes="(min-width: 992px) 50vw"
							           src="/assets/scss/wp-content/uploads/2019/01/ardensBuildingWithJeepInFrontCropped.jpg"
							           class="image" alt="Jeep Cherokee custom suspension rebuild with lift kit by Arden's Auto Oshkosh, WI">


											</div>

											<h4 class="centerText">Jeep Cherokee</h4>

										</a>

								</div>

								<div class="col40 zoomContainerWrapper">

										<a class="zoomContainerLarge" href="/projects/mazdaspeed3/">

											<div class="zoomContainerLarge">

												<img class="image zoomImage"
							          srcset="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-400.jpg 400w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-500.jpg 600w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16-600.jpg 800w,
							           /assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16MediumSquared.jpg 1200w"
							          sizes="(min-width: 992px) 50vw"
							           src="/assets/scss/wp-content/uploads/2019/01/mazdaspeed3Project16MediumSquared.jpg"
							           class="image" alt="Engine rebuild on a 2012 Mazdaspeed3 by Ardens Auto Oshkosh WI">

											</div>

											<h4 class="centerText">Mazdaspeed3</h4>

										</a>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="CTA">

					<?php get_template_part('Includes/CTA'); ?>

				</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
