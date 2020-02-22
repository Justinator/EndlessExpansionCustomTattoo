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
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id ="contactContent">
			<div id="contactWrap">
				<div class="pageWidth flex-container">
					<div id="formWrap" class="col60">
						<h2 class="whiteText">
						Get Started Creating Your Next Custom Tattoo
						</h2>
						<h3 class="whiteText">To schedule an appointment call us at <a class="plainLink" href="tel:(920)241-2872">(920) 241-2872</a> or fill out the form below.</h3>
						<?php echo do_shortcode('[caldera_form id="CF5adf9952b755d"]'); ?>
					</div>
					<div class="col40">
						<div class="smallMapWrapper">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364742.48757031496!2d-88.53390547719992!3d44.42186503815325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8802fa8c653bffff%3A0x7cb727fc9064f296!2sEndless%20Expansion%20Custom%20Tattoo%2C%20LLC!5e0!3m2!1sen!2sus!4v1579354537605!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
						<div>
							<div class="locationContentWrapper">
								<div class="locationContent blackBlock">
									<h5 class="whiteText">Endless Expansion Custom Tattoo</h5>
									<a class="plainLink" target="_blank" href="https://goo.gl/maps/UA7VPihqcXj9oe6k9">
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
<?php

get_footer();
