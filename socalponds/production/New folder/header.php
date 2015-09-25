<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="../style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
			    <nav>
		            <div id="search">
		                <form method="get" id="searchform" action="http://www.socalponds.com">
		                    <input type="text" class="text_input" name="s" id="s" onfocus="if(this.value == 'Search SoCal Ponds') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search SoCal Ponds';}">
		                    <input value="Search" type="submit" class="button white">
		                </form>
		            </div>

		            <ul>
		                <li>
		                    <a href="index.html" title="Home Page">Home</a>
		                </li>
		                <li>
		                    <a href="about.html" title="About Socal Ponds">About Us</a>
		                </li>
		                <li><a href="services/services/maintenance.html" title="Services for ponds, water, and garden services">Services</a>
		                    <ul>
		                        <li><a href="services/construction/pond-design.html">Pond Construction</a>
		                            <ul>
		                                <li><a href="services/construction/bog-filtration.html">Bog Filtration</a></li>
		                                <li><a href="services/construction/pond-design.html">Pond Design</a></li>
		                            </ul>   
		                        </li>
		                        <li><a href="services/supplies/pumps.html">Pond Supplies</a>
		                            <ul>
		                                <li><a href="services/supplies/beneficial-bacteria.html">Beneficial Bacteria</a></li>
		                                <li><a href="services/supplies/filters.html">Filters</a></li>
		                                <li><a href="services/supplies/pumps.html">Pumps</a></li>
		                                <li><a href="services/supplies/skimmers.html">Skimmers</a></li>
		                            </ul>   
		                        </li>
		                        <li><a href="services/services/maintenance.html">Pond Services</a>
		                            <ul>
		                                <li><a href="services/services/clean-out.html">Clean-out</a></li>
		                                <li><a href="services/services/maintenance.html">Maintenance</a></li>
		                                <li><a href="services/services/repair.html">Repair</a></li>
		                            </ul>
		                        </li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="portfolio/pondsngardens.html">Portfolio</a>
		                    <ul>
		                        <li><a href="portfolio/landscape.html">Landscaping</a></li>
		                        <li><a href="portfolio/pondsngardens.html">Ponds & Water Gardens</a></li>
		                        <li><a href="portfolio/aquaticplants.html">Aquatic Plants</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="socalponds/contact/contact.html">Contact Info</a>
		                    <ul>
		                        <li><a href="contact/service.html" title="Service Area">Service Area</a></li>
		                        <li><a href="contact/contact.html" title="Contact Information">Contact Us</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a href="blog/" title="Blog Page">Blog</a>
		                </li>
		            </ul>
	        	</nav>
			    <div class="banner">
			        <a href="index.html"><img src="../images/socalpond-inc_logo.png" title="logo" alt="logo" id="logo" /></a>
			        <div class="social">
			            <!-- BEGIN: Constant Contact Basic Opt-in Email List Form -->
			            <div id="mail_list">
			                <table>
			                    <tr>
			                        <td>Join Our Mailing List</td>
			                    </tr>
			                    <tr>
			                        <td>
			                            <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
			                                <input type="hidden" name="llr" value="sf4mbwlab">
			                                <input type="hidden" name="m" value="1112062459058">
			                                <input type="hidden" name="p" value="oi">
			                                Email:<input type="text" name="ea" size="20" value="">
			                                <input type="submit" name="go" value="Go" class="submit">
			                            </form>
			                        </td>
			                    </tr>
			                </table>
			            </div>
			            <!-- END: Constant Contact Basic Opt-in Email List Form -->
			            <a href="https://www.facebook.com/SoCalPonds" target="_blank">
			                <img src="../icon/fb-logo.png" title="Facebook Link" alt="Facebook Link" id="fb" /></a>
			            <a href="http://twitter.com/#!/SoCalPonds" target="_blank">
			                <img src="../icon/twitter-logo.png" title="Twitter Link" alt="Twitter Link" id="tw" /></a>
			            <a href="https://www.youtube.com/user/SoCalPonds1/videos" target="_blank">
			                <img src="../icon/yt-logo.png" title="YouTube Link" alt="YouTube Link" id="yt" /></a>
			            <a href="https://plus.google.com/b/106727731342647853737/106727731342647853737/about?hl=en" target="_blank">
			                <img src="../icon/gp-logo.png" title="Yelp Link" alt="Yelp Link" id="yp" /></a>
			        </div>
			    </div>
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div class="container">
		<div id="main" class="site-main content">
