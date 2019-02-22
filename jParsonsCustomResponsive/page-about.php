<?php
/**
 * Template Name: About
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

					<div class="hero aboutHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="centerText aboutHeading">

									<div class="heroHeading">

										<h1 class="whiteText">A Family Owned and Operated Auto Repair Shop Since 1959</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<div>

				<section id ="ardensHistory">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col50">

							<div class="blockText">

								<h2>About Arden's Automotive Hospital</h2>

								<p>
									Arden’s Automotive Hospital brings you three generations of auto repair experience. Arden’s originally opened in 1959 by Arden George Todd, who specialized in
									transmission repairs. In 1992, Arden James Todd took over his father's business keeping true to the transmission repair roots that his father had established.
								</p>
								<p>
									As time went on, Arden’s began branching out from transmission work to encompass all auto repairs. Arden's became a full-service auto
									repair shop, servicing all makes and models in the Oshkosh area.
								</p>
								<p>
									2016 brought along the third generation in the family as Alex Arden Todd reopened the business and took over where his grandfather and
									father had left off. After Alex took over, the founding principles of fairness and honesty remain the driving force behind
									Arden’s Automotive Hospital.
								</p>

								<p>
									Need help with your auto repairs? Stop in or contact Arden’s with all of your auto repair needs and experience the family
									oriented and honest service that has been driving Arden’s for almost 60 years.
								</p>

								<a href="/projects/"><button class="redButton">View Some Of Our Work</button></a>

							</div>

						</div>

						<div class="col50">

							<img src="/assets/scss/wp-content/uploads/2019/01/ardenAndAlexTodd.jpg" class="image" alt="Alex Arden Todd and Arden James Todd owner and former owner of Ardens Automotive Hospital">

						</div>

					</div>

				</section>

				<section class="ardensBenefits paddedSection">

					<?php get_template_part('Includes/benefits'); ?>

				</section>

				<section id="services">

					<div class="pageWidth">

						<h2 class="centerText">Auto Repair Services in Oshkosh, WI</h2>

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

				<section class="CTA">

					<?php get_template_part('Includes/CTA'); ?>

				</section>

				<section class="map">

					<?php get_template_part('Includes/map'); ?>

				</section>

				<section class="feedback">

					<?php get_template_part('Includes/survey'); ?>

				</section>

				</section>

				</div>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
