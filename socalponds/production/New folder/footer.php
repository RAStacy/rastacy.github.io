<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<?php do_action( 'socalponds_footer' ); ?>
				<div class="container">
					<div class="left" id="address">
						<table>
							<tbody>
								<tr>
									<td>So-Cal Ponds</td>
									<td>Ph: 818.541.9944</td>
								</tr>
								<tr>
									<td>Sunland, CA</td>
									<td>Fax: 818.541.9943</td>
								</tr>
							</tbody>
						</table>	
					</div>
					<div class="right" id="footer_nav">
		                <ul>
		                    <li>
		                        <a href="sitemap.html" title="Site Map">site map</a>
		                    </li>
		                    <li>
		                        <a href="about.html" title="About Socal Ponds">about us</a>
		                    </li>
		                    <li>
		                        <a href="services/services/clean-out.html" title="Services for ponds, water, and garden services">services</a>
		                    </li>
		                    <li>
		                        <a href="portfolio/pondsngardens.html" title="Portfolio">portfolio</a>
		                    </li>
		                    <li>
		                        <a href="contact/contact.html" title="Contact Information">contact us</a>
		                    </li>
		                    <li>
		                        <a href="blog/" title="Blog Page">blog</a>
		                    </li>
		                </ul>
					</div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		</div>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>