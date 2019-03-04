<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jParsonsCustomResponsive
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-info pageWidth">

			<ul>

				<li>

					<a href="/tattoo-services/" class="footerLink">Tattoo Services</a>

				</li>

				<li>

					<a href="/tattoo-portfolio/" class="footerLink">Tattoo Portfolio</a>

				</li>

				<li>

					<a href="/about/" class="footerLink">About</a>

				</li>

				<li>

					<a href="/client-deposits/" class="footerLink">Client Deposits</a>

				</li>

				<li>

					<a  href="/contact/" class="footerLink">Contact</a>

				</li>

			</ul>

		</div><!-- .site-info -->

		<div class="footerContact pageWidth flex-container">

			<div class="col50 centerText">

			<a href="https://endlessexpansiontattoo.com/"><img src="/wp-content/uploads/2019/03/endlessExpansionNewLogo-600w.jpg" class="footerLogo" alt="Endless Expansion Custom Tattoo logo"></a>

			<?php get_template_part('Includes/social'); ?>

			<address>

				<h5 class="centerText whiteText">Endless Expansion Custom Tattoo</h5>

				<a target="_blank" href="https://www.google.com/maps/dir//1422+Velp+Ave,+Green+Bay,+WI+54303/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x8802f0656fa44255:0x41108808b4bc0ecb?ved=2ahUKEwipyfbAvdXgAhVGxoMKHXwcAqIQwwUwAHoECAAQAw" rel="noreferrer"><p class="centerText whiteText">1422 Velp Ave. Green Bay, WI 54303</p></a>

				<a class="whiteText centerText" href="tel:(920)241-2872"><p>(920) 241-2872</p></a>

		</address>

			</div>

		</div>

			<div id="copyright">

				<div class="copyrightContentWrap navWidth">

					<div id="copyrightWrap">

						<div id="copyrightContent">

							<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

								<defs>

									<symbol id="icon-copyright" viewBox="0 0 24 28">

										<title>copyright</title>

										<path d="M17.969 16.781v1.703c0 2.203-3.516 3.016-5.719 3.016-4.281 0-7.5-3.266-7.5-7.578 0-4.234 3.187-7.422 7.422-7.422 1.547 0 5.594 0.547 5.594 3.031v1.703c0 0.141-0.109 0.25-0.25 0.25h-1.844c-0.141 0-0.25-0.109-0.25-0.25v-1.094c0-0.984-1.891-1.437-3.172-1.437-2.922 0-4.953 2.109-4.953 5.141 0 3.141 2.125 5.437 5.078 5.437 1.125 0 3.25-0.422 3.25-1.406v-1.094c0-0.141 0.109-0.25 0.234-0.25h1.859c0.125 0 0.25 0.109 0.25 0.25zM12 4c-5.516 0-10 4.484-10 10s4.484 10 10 10 10-4.484 10-10-4.484-10-10-10zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12v0c6.625 0 12 5.375 12 12z"></path>

									</symbol>

								</defs>

							</svg>

							<svg class="icon icon-copyright"><use xlink:href="#icon-copyright"></use></svg><p>&nbsp;<script>document.write(new Date().getFullYear());</script> Endless Expansion Custom Tattoo</p>

						</div>

						<div id="closingLinks">

							<a href="/sitemap/" class="borderRight">Sitemap</a> |

							<a href="/privacy-policy/" class="borderRight ">Privacy Policy</a> |

							<a href="/contact/" id="footerContactLink">Contact Us</a>

						</div>

					</div>

					<div class="siteAuthor">Web Design by

							<a href="https://seejustincode.com" target="_blank" rel="noreferrer"> Justin Parsons</a>

					</div>

				</div>

			</div>

			<!-- Script for barba.js -->
			<!--<script async src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>-->

			<!-- Load the :focus-visible polyfill -->
    	<script src="https://unpkg.com/focus-visible"></script>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
