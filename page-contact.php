<?php
/**
 * Template Name: Contact
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

				<section id ="contactContent">

					<div id="contactWrap">

						<div class="pageWidth flex-container">

							<div id="formWrap" class="col60">

								<h2 class="whiteText">
								Get Started Creating Your Next Custom Tattoo
								</h2>

								<p class="whiteText">Isn't it time you worked with a conscientious tattoo artist to thoughtfully plan and create your new custom tattoo?
									Fill out the form below so we can start creating your perfect piece of artwork together.</p>

								<h3 class="whiteText">To schedule an appointment call us at <a class="plainLink" href="tel:(920)241-2872">(920) 241-2872</a> or fill out the form below.</h3>

								<?php echo do_shortcode('[caldera_form id="CF5adf9952b755d"]'); ?>

							</div>

							<div class="col40">

								<div class="smallMapWrapper">

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2843.566176421988!2d-88.0440947844731!3d44.54451457910082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8802f0656fa44255%3A0x41108808b4bc0ecb!2s1422+Velp+Ave%2C+Green+Bay%2C+WI+54303!5e0!3m2!1sen!2sus!4v1551050449039" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

								</div>

								<div>

									<div class="locationContentWrapper">

										<div class="locationContent blackBlock">

											<h5 class="whiteText">Endless Expansion Custom Tattoo</h5>

											<a class="plainLink" target="_blank" href="https://www.google.com/maps/dir//1422+Velp+Ave,+Green+Bay,+WI+54303/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x8802f0656fa44255:0x41108808b4bc0ecb?ved=2ahUKEwipyfbAvdXgAhVGxoMKHXwcAqIQwwUwAHoECAAQAw">

											<p>1422 Velp Ave<br>

											Green Bay, WI 54303</p></a>

											<a class="plainLink" href="tel:(920)241-2872">(920) 241-2872</a>

											<br>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

			</main>

		</div>

	</div>

</div>
<?php

get_footer();
