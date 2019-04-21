<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="page-404">
	<h1>Whoops!</h1>
	<div class="centered-404">
		<h2>Sorry, this page no longer exists, never existed or has been moved. </h2>

		<h3>Why don't you have a look at our blog, <a href="<?php echo site_url('/about/')?>">About page</a> or <a href="<?php echo site_url('/case-studies/')?>">Work page</a>.</h3>
		<h3>Or you could just <a href="<?php echo site_url('/contact/')?>">contact us</a> and tell us to fix the problem!</h3>
	</div>
</div>

<?php get_footer(); ?>
