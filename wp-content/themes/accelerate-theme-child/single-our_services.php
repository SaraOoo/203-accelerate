<?php
/**
 * The template for displaying Our Services
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

<div id="primary" class="our-services-top">
<div class="main-content" role="main">

	<?php while ( have_posts() ) : the_post();
		$main_image = get_field ('main_image');
		$text_for_main_image = get_field ('text_for_main_image');
		$size = "full";
		?>

		<div class="main-image-div">
			<?php if($imain_image) {
				echo wp_get_attachment_image( $main_image, $size );
		} ?>

			<div class="text-for-main-image">
				<p><?php echo $text_for_main_image; ?></p>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>
</div><!-- .main-content -->
</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
        $service_1 = get_field('service_1');
				$service_2 = get_field('service_2');
				$service_3 = get_field('service_3');
				$service_4 = get_field('service_4');
				$image_service_1 = get_field('image_for_service_1');
				$image_service_2 = get_field('image_for_service_2');
				$image_service_3 = get_field('image_for_service_3');
				$image_service_4 = get_field('image_for_service_4');
				$size = "thumbnail";
				$description_1 = get_field('description_service_1');
				$description_2 = get_field('description_service_2');
				$description_3 = get_field('description_service_3');
				$description_4 = get_field('description_service_4');
      ?>

      <section class="our-services">
          <h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
			</section>

			<div class="service-content">

				<article class="service-1">
					<figure>
						<?php if($image_service_1) {
							echo wp_get_attachment_image( $image_service_1, $size );
					} ?>
					</figure>
					<div class="content-right">
						<h4><?php echo $service_1; ?></h4>
						<p><?php echo $description_1; ?></p>
					</div>
				</article>


					<article class="service-2">
						<figure>
							<?php if($image_service_2) {
								echo wp_get_attachment_image( $image_service_2, $size );
					 	} ?>
					</figure>
					<div class="content-right">
						<h4><?php echo $service_2; ?></h4>
						<p><?php echo $description_2; ?></p>
					</div>
					</article>


					<article class="service-3">
						<figure>
							<?php if($image_service_3) {
								echo wp_get_attachment_image( $image_service_3, $size );
					 	} ?>
						</figure>
						<div class="content-right">
							<h4><?php echo $service_3; ?></h4>
							<p><?php echo $description_3; ?></p>
						</div>
					</article>


					<article class="service-4">
						<figure>
							<?php if($image_service_4) {
								echo wp_get_attachment_image( $image_service_4, $size );
					 	} ?>
					</figure>
					<div class="content-left">
						<h4><?php echo $service_4; ?></h4>
						<p><?php echo $description_4; ?></p>
					</div>
					</article>
		</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

  <nav id="navigation" class="container">
  	<div class="contact-us-part">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
		</div>
  </nav>

<?php get_footer(); ?>
