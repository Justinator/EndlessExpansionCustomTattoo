<?php
/**
 * Template Name: Sitemap
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
		<section>
			<div>
				<div>
					<div class="pageWidth projectTitleWrapper">
					<h1 class="primaryText">Sitemap</h1>
					</div>
				</div>
				</div>
				</section>
				<div class="pageWidth paddedSection">
				<h3 class="whiteText">Pages</h3>
				<ul>
					<?php wp_list_pages( 'exclude=176,177,178,149,175,349' ); ?>
				</ul>
			</div>
	</main>
</div>
<?php

get_footer();
