<?php
/**
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

					<div class="smallHero thankYouHero">

						<div class="smallHeroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="homeHeading">

									<div class="heroHeading">

										<h1 class="whiteText">Thank You</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

				<section class ="pageIntro">

					<div class="navWidth flex-container centerAlignedContainer">

						<div class="col70 whiteText limitWidth">

							<p>
								Thank you for your interest in my work! I have a deep respect for tattooing and creating custom artwork for all my clients
								and I look forward to helping you bring your custom tattoo idea to life.
							</p>

							<p>
								If you haven't already, view some of my favorite custom artwork below, or follow me on social media to see what I'm up to.
							</p>

						</div>

					</div>

					<?php get_template_part('Includes/social'); ?>

				</section>

				<section class="featuredWork">

					<?php get_template_part('Includes/featuredWork'); ?>

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
