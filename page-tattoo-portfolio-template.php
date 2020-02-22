<?php
/**
 * Template Name: Portfolio
 *
 * @package jParsonsCustomResponsive
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="hero">
			<div class="smallHero portfolioHero">
				<div class="smallHeroOverlay">
					<div class="heroHeadingWrap fullWidth">
						<div class="homeHeading">
							<div class="heroHeading">
								<h1 class="whiteText">Custom Tattoo Portfolio</h1>
								<p class="whiteText">Your tattoo is 100% designed and tailored for you and you only, in a completely private and relaxed setting</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section class="testimonial paddedSection removeBottomPadding">
				<div class="limitWidth blackBlock">
					<div class="testimonialWrapper">
						<p class="whiteText centerText">
							Greg is an unbelievably talented artist. He can free hand like a boss and every detail is thought through. Everything is custom and meaningful
							never repeated. He makes getting a tattoo more than what it is, he makes it an experience. I highly recommend to anyone who wants high quality,
							one of a kind, beautiful art on their skin.
						</p>
						<div class="orangeDivider"></div>
						<h6 class="whiteText centerText noMargin">Danielle Marie</h6>
					</div>
				</div>
			</section>
			<section id="featuredWork">
				<div class="pageWidth">
					<h4>Filter by tattoo type</h4>
					<div id="myBtnContainer">
						<button class="filterButton active" onclick="filterSelection('all')"> All</button><span class="screen-reader-text">View all projects</span>
						<button class="filterButton" onclick="filterSelection('fullSleeve')"> Full Sleeve</button><span class="screen-reader-text">Filter Full Sleeve tattoos</span>
					  <button class="filterButton" onclick="filterSelection('halfSleeve')"> Half Sleeve</button><span class="screen-reader-text">Filter half sleeve tattoos</span>
						<button class="filterButton" onclick="filterSelection('animals')"> Animals</button><span class="screen-reader-text">Filter animal tattoos</span>
						<button class="filterButton" onclick="filterSelection('birds')"> Birds</button><span class="screen-reader-text">Filter bird tattoos</span>
						<button class="filterButton" onclick="filterSelection('blackGray')"> Black and Gray</button><span class="screen-reader-text">Filter Black and Gray tattoos</span>
						<button class="filterButton" onclick="filterSelection('fullColor')"> Color</button><span class="screen-reader-text">Filter full color tattoos</span>
						<button class="filterButton" onclick="filterSelection('coverUp')"> Cover Ups</button><span class="screen-reader-text">Filter cover up tattoos</span>
						<button class="filterButton" onclick="filterSelection('flowers')"> Floral</button><span class="screen-reader-text">Filter floral tattoos</span>
						<button class="filterButton" onclick="filterSelection('nature')"> Nature</button><span class="screen-reader-text">Filter nature tattoos</span>
						<button class="filterButton" onclick="filterSelection('skulls')"> Skull</button><span class="screen-reader-text">Filter skull tattoos</span>
						<button class="filterButton" onclick="filterSelection('space')"> Space</button><span class="screen-reader-text">Filter space tattoos</span>
						<!--<button class="filterButton" onclick="filterSelection('welding')"> Welding</button>-->
					</div>
				</div>
				<div class="pageWidth">
					<div class="navWidth paddedSection">
						<div class="fullWidth featuredWorkWrapper">
							<?php if( have_rows('portfolio_content') ): ?>
								<?php while( have_rows('portfolio_content') ): the_row();
									// vars
									$portfolio_image = get_sub_field('portfolio_image');
									$imageCat = get_sub_field('image_category');
									?>
									<div class="column flexImage <?php foreach( $imageCat as $cat ): echo $cat . " "; endforeach; ?>">
										<?php
							        $imageID = $portfolio_image['ID'];
							        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							      ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial paddedSection">
				<div class="pageWidth blackBlock">
					<div class="testimonialWrapper">
						<p class="whiteText centerText">
							Greg has done multiple pieces for me, including a full arm and chest piece. His style is unique and beautiful, his tattoos come out vibrant and the
							lines are always clean. Greg is easy to be around and creates a comfortable environment. It’s always a good experience all around.
						</p>
						<div class="orangeDivider"></div>
						<h6 class="whiteText centerText noMargin">Sara Martin</h6>
					</div>
				</div>
			</section>
			<section class="CTA">
				<?php get_template_part('Includes/CTA'); ?>
			</section>
		</section>
	</main>
</div>

<?php

get_footer();
